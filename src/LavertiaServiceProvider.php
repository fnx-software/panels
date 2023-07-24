<?php
namespace Lavertia\Panels;

class LavertiaServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('lavertia')
            ->hasCommands($this->getCommands())
            ->hasConfigFile()
            ->hasRoutes(['web'])
            ->hasTranslations()
            ->hasViews();
    }
    protected function getCommands(): array
    {
        $commands = [
        ];

        $aliases = [];

        foreach ($commands as $command) {
            $class = 'Lavertia\\Commands\\Aliases\\' . class_basename($command);

            if (! class_exists($class)) {
                continue;
            }

            $aliases[] = $class;
        }

        return array_merge($commands, $aliases);
    }

}