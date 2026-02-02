<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Al Mutmainnah');
        $this->migrator->add('general.site_active', true);
        $this->migrator->add('general.faqs', [
            [
                'question' => 'What is Al Mutmainnah Maa O Shishu Haspatal?',
                'answer' => 'Al Mutmainnah Maa O Shishu Haspatal is a hospital located in Dhaka, Bangladesh.',
            ],
        ]);
        $this->migrator->add('general.phone', '');
        $this->migrator->add('general.mail', '');
        $this->migrator->add('general.address', '');
        $this->migrator->add('general.whatsapp', '');
        $this->migrator->add('general.socials', []);
    }
};
