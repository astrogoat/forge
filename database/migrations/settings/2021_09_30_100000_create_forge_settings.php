<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateForgeSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('forge.enabled', false);
        // $this->migrator->add('forge.url', '');
        // $this->migrator->addEncrypted('forge.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('forge.enabled');
        // $this->migrator->delete('forge.url');
        // $this->migrator->delete('forge.access_token');
    }
}
