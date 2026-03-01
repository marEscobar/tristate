<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'title' => 'The Ultimate Guide to Choosing the Right Exterior Signage for Your Business',
                'slug' => 'choosing-exterior-signage',
                'excerpt' => 'Discover how to select the perfect exterior signage that not only represents your brand but also attracts customers and complies with local regulations. Learn about different sign types, materials, and design considerations.',
                'content' => null,
                'image' => 'img/exterior/ext1.JPG',
                'published_at' => '2025-01-15 00:00:00',
                'is_published' => true,
            ],
            [
                'title' => 'LED Display Technology: Transforming Modern Business Communication',
                'slug' => 'led-display-technology',
                'excerpt' => 'Explore the latest advancements in LED display technology and how businesses are using dynamic signage to engage customers, increase visibility, and drive sales. Learn about installation, maintenance, and ROI.',
                'content' => null,
                'image' => 'img/exterior/ext2.JPG',
                'published_at' => '2025-01-10 00:00:00',
                'is_published' => true,
            ],
            [
                'title' => 'Commercial Awnings: Combining Functionality with Aesthetic Appeal',
                'slug' => 'commercial-awnings-guide',
                'excerpt' => 'Learn how commercial awnings can enhance your storefront\'s appearance while providing practical benefits like weather protection, energy savings, and increased curb appeal. Discover design options and materials.',
                'content' => null,
                'image' => 'img/exterior/ext3.JPG',
                'published_at' => '2025-01-05 00:00:00',
                'is_published' => true,
            ],
            [
                'title' => 'Sign Permits 101: Everything You Need to Know',
                'slug' => 'sign-permits-guide',
                'excerpt' => 'Navigating the permit process can be complex. This comprehensive guide covers sign permit requirements, application processes, timelines, and how professional permit expediting services can save you time and money.',
                'content' => null,
                'image' => 'img/exterior/ext4.JPG',
                'published_at' => '2024-12-28 00:00:00',
                'is_published' => true,
            ],
            [
                'title' => 'Maintenance Tips to Extend the Life of Your Business Signs',
                'slug' => 'sign-maintenance-tips',
                'excerpt' => 'Proper maintenance is key to keeping your business signs looking professional and functioning correctly. Get expert tips on cleaning, inspection schedules, and when to call professionals for repairs or replacements.',
                'content' => null,
                'image' => 'img/exterior/ext6.JPG',
                'published_at' => '2024-12-20 00:00:00',
                'is_published' => true,
            ],
        ];

        foreach ($blogs as $blog) {
            Blog::updateOrCreate(
                ['slug' => $blog['slug']],
                $blog
            );
        }
    }
}

