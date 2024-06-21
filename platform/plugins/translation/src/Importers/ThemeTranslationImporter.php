<?php

namespace Botble\Translation\Importers;

use Botble\Base\Supports\Language;
use Botble\DataSynchronize\Contracts\Importer\WithMapping;
use Botble\DataSynchronize\Importer\ImportColumn;
use Botble\DataSynchronize\Importer\Importer;
use Botble\Translation\Manager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ThemeTranslationImporter extends Importer implements WithMapping
{
    public function chunkSize(): int
    {
        return 100;
    }

    public function getLabel(): string
    {
        return trans('plugins/translation::translation.panel.theme-translations.title');
    }

    public function columns(): array
    {
        $columns = [
            ImportColumn::make('english')
                ->rules(
                    ['nullable', 'string', 'max:10000'],
                    trans(
                        'plugins/translation::translation.import.rules.trans',
                        ['max' => 10000]
                    )
                ),
        ];

        foreach (Language::getAvailableLocales() as $locale) {
            if ($locale['locale'] === 'en') {
                continue;
            }

            $columns[] = ImportColumn::make(Str::snake($locale['name']))
                ->rules(
                    ['nullable', 'string', 'max:10000'],
                    trans(
                        'plugins/translation::translation.import.rules.trans',
                        ['max' => 10000]
                    )
                );
        }

        return $columns;
    }

    public function getValidateUrl(): string
    {
        return route('tools.data-synchronize.import.theme-translations.validate');
    }

    public function getImportUrl(): string
    {
        return route('tools.data-synchronize.import.theme-translations.store');
    }

    public function getExportUrl(): ?string
    {
        return Auth::user()->hasPermission('theme-translations.export')
            ? route('tools.data-synchronize.export.theme-translations.store')
            : null;
    }

    public function map(mixed $row): array
    {
        return $row;
    }

    public function handle(array $data): int
    {
        $count = 0;

        $manager = app(Manager::class);

        foreach (Language::getAvailableLocales() as $locale) {
            if ($locale['locale'] === 'en') {
                continue;
            }

            $translations = $manager->getThemeTranslations($locale['locale']);

            $localeName = $this->getLocaleName($locale['name']);

            foreach ($data as $row) {
                if (! $localeName || ! isset($row[$localeName])) {
                    continue;
                }

                if (isset($translations[$row['english']])) {
                    $translations[$row['english']] = $row[$localeName];
                } else {
                    $translations[] = [$row['english'] => $row[$localeName]];
                }
            }

            if ($translations) {
                $manager->saveThemeTranslations($locale['locale'], $translations);
                $count += count($translations);
            }
        }

        return $count;
    }

    protected function getLocaleName(string $key): ?string
    {
        foreach (Language::getAvailableLocales() as $locale) {
            if ($locale['name'] === $key) {
                return Str::snake($locale['name']);
            }
        }

        return null;
    }
}
