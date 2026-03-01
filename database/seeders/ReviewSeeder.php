<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'name' => 'Brittany D',
                'rating' => 5,
                'comment' => 'Super easy to work with and they really know their stuff. When it comes to permits, custom vinyl turned out awesome, and the awning looking good too -- totally transforms the front of storefront. Definitely recommend!',
                'is_approved' => true,
                'created_at' => '2025-05-01 10:30:00',
            ],
            [
                'name' => 'Brit',
                'rating' => 5,
                'comment' => 'Melvin, Dennis and the whole crew at TriState are professional, creative, and reliable--they delivered a custom sign and awning that was high-quality and eye-catching. Excellent customer service and timely installation. Highly recommended these guys for a storefront side that will set apart your business apart.',
                'is_approved' => true,
                'created_at' => '2025-05-01 14:20:00',
            ],
            [
                'name' => 'Michael R',
                'rating' => 5,
                'comment' => 'Excellent service from start to finish. The team was professional, responsive, and delivered exactly what we needed. Our new LED display looks amazing and has already increased our visibility. Thank you!',
                'is_approved' => true,
                'created_at' => '2025-01-10 14:20:00',
            ],
            [
                'name' => 'Sarah Johnson',
                'rating' => 5,
                'comment' => 'We needed awnings for our storefront and Tri State delivered beyond our expectations. The quality is outstanding and the installation was quick and clean. Our customers love the new look!',
                'is_approved' => true,
                'created_at' => '2024-12-28 09:15:00',
            ],
            [
                'name' => 'David Chen',
                'rating' => 5,
                'comment' => 'Best sign company in the area! They handled all the permits for us, which saved us so much time and hassle. The exterior signage they created is exactly what we envisioned. Highly professional team.',
                'is_approved' => true,
                'created_at' => '2024-12-20 16:45:00',
            ],
            [
                'name' => 'Jennifer Martinez',
                'rating' => 5,
                'comment' => 'I\'ve worked with Tri State Signs & Awnings for multiple projects and they never disappoint. Their attention to detail and customer service is top-notch. The interior signs they created for our office look fantastic.',
                'is_approved' => true,
                'created_at' => '2024-12-15 11:00:00',
            ],
            [
                'name' => 'Robert Thompson',
                'rating' => 4,
                'comment' => 'Great experience overall. The team was knowledgeable and helped us choose the right signage for our business. Installation was smooth and the final result looks great. Would definitely use them again.',
                'is_approved' => true,
                'created_at' => '2024-12-10 13:30:00',
            ],
            [
                'name' => 'Lisa Anderson',
                'rating' => 5,
                'comment' => 'Tri State Signs & Awnings exceeded our expectations! They were able to work within our budget and timeline. The commercial awning they installed has made a huge difference for our business. Very satisfied!',
                'is_approved' => true,
                'created_at' => '2024-12-05 10:20:00',
            ],
            [
                'name' => 'James Wilson',
                'rating' => 5,
                'comment' => 'Outstanding service! From the initial consultation to the final installation, everything was handled professionally. The LED display they installed is eye-catching and has definitely increased foot traffic to our store.',
                'is_approved' => true,
                'created_at' => '2024-11-28 15:10:00',
            ],
        ];

        foreach ($reviews as $review) {
            Review::updateOrCreate(
                ['name' => $review['name'], 'created_at' => $review['created_at']],
                $review
            );
        }
    }
}

