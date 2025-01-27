<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Easy Leasing Sitemap';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sitemap = Sitemap::create();

        // Add static pages
        $sitemap->add(Url::create('/')
            ->setLastModificationDate(now())
            ->setChangeFrequency('daily')
            ->setPriority(1.0));

        $sitemap->add(Url::create('/vehicle-insurance')
            ->setLastModificationDate(now())
            ->setChangeFrequency('daily')
            ->setPriority(0.8));
            
        $sitemap->add(Url::create('/vehicle-import-cost-calculator-sri-lanka')
            ->setLastModificationDate(now())
            ->setChangeFrequency('daily')
            ->setPriority(0.8));
        
        $sitemap->add(Url::create('/about-us')
            ->setLastModificationDate(now())
            ->setChangeFrequency('monthly')
            ->setPriority(0.8));
        
        $sitemap->add(Url::create('/contact-us')
            ->setLastModificationDate(now())
            ->setChangeFrequency('monthly')
            ->setPriority(0.8));

        // Dynamically add pages (e.g., from a database)
        $posts = \App\Models\Blog::all(); // Replace with your model
        foreach ($posts as $post) {
            $sitemap->add(Url::create("/article/{$post->slug}")
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency('weekly')
                ->setPriority(0.8));
        }
        
        $sitemap->add(Url::create('/terms-and-conditions')
            ->setLastModificationDate(now())
            ->setChangeFrequency('monthly')
            ->setPriority(0.1));
            
        $sitemap->add(Url::create('/privacy-policy')
            ->setLastModificationDate(now())
            ->setChangeFrequency('monthly')
            ->setPriority(0.1));

        // Save the sitemap to the public directory
        $sitemap->writeToFile(base_path('sitemap.xml'));

        $this->info('Sitemap has been generated successfully!');
        return Command::SUCCESS;
    }
}
