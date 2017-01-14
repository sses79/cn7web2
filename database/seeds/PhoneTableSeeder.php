<?php

use Illuminate\Database\Seeder;
use App\Models\Phone;

class PhoneTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('phones')->truncate();

		$phones_json_array = [
			'{
        "hs": "motorola-xoom-with-wi-fi", 
        "imageUrl": "img/phones/motorola-xoom-with-wi-fi.0.jpg", 
        "name": "Motorola XOOM\u2122 with Wi-Fi", 
        "snippet": "The Next, Next Generation\r\n\r\nExperience the future with Motorola XOOM with Wi-Fi, the worlds first tablet powered by Android 3.0 (Honeycomb)."
    }',
			'{
        "hs": "motorola-xoom", 
        "imageUrl": "img/phones/motorola-xoom.0.jpg", 
        "name": "MOTOROLA XOOM\u2122", 
        "snippet": "The Next, Next Generation\n\nExperience the future with MOTOROLA XOOM, the worlds first tablet powered by Android 3.0 (Honeycomb)."
    }',
			'{
        "hs": "motorola-atrix-4g", 
        "imageUrl": "img/phones/motorola-atrix-4g.0.jpg", 
        "name": "MOTOROLA ATRIX\u2122 4G", 
        "snippet": "MOTOROLA ATRIX 4G the worlds most powerful smartphone."
    }',
			'{
        "hs": "dell-streak-7", 
        "imageUrl": "img/phones/dell-streak-7.0.jpg", 
        "name": "Dell Streak 7", 
        "snippet": "Introducing Dell\u2122 Streak 7. Share photos, videos and movies together. It\u2019s small enough to carry around, big enough to gather around."
    }',
			'{
        "hs": "samsung-gem", 
        "imageUrl": "img/phones/samsung-gem.0.jpg", 
        "name": "Samsung Gem\u2122", 
        "snippet": "The Samsung Gem\u2122 brings you everything that you would expect and more from a touch display smart phone \u2013 more apps, more features and a more affordable price."
    }',
			'{
        "hs": "dell-venue", 
        "imageUrl": "img/phones/dell-venue.0.jpg", 
        "name": "Dell Venue", 
        "snippet": "The Dell Venue; Your Personal Express Lane to Everything"
    }',
			'{
        "hs": "nexus-s", 
        "imageUrl": "img/phones/nexus-s.0.jpg", 
        "name": "Nexus S", 
        "snippet": "Fast just got faster with Nexus S. A pure Google experience, Nexus S is the first phone to run Gingerbread (Android 2.3), the fastest version of Android yet."
    }',
			'{
        "hs": "lg-axis", 
        "imageUrl": "img/phones/lg-axis.0.jpg", 
        "name": "LG Axis", 
        "snippet": "Android Powered, Google Maps Navigation, 5 Customizable Home Screens"
    }',
			'{
        "hs": "samsung-galaxy-tab", 
        "imageUrl": "img/phones/samsung-galaxy-tab.0.jpg", 
        "name": "Samsung Galaxy Tab\u2122", 
        "snippet": "Feel Free to Tab\u2122. The Samsung Galaxy Tab\u2122 brings you an ultra-mobile entertainment experience through its 7\u201d display, high-power processor and Adobe\u00ae Flash\u00ae Player compatibility."
    }',
			'{
        "hs": "samsung-showcase-a-galaxy-s-phone", 
        "imageUrl": "img/phones/samsung-showcase-a-galaxy-s-phone.0.jpg", 
        "name": "Samsung Showcase\u2122 a Galaxy S\u2122 phone", 
        "snippet": "The Samsung Showcase\u2122 delivers a cinema quality experience like you\u2019ve never seen before. Its innovative 4\u201d touch display technology provides rich picture brilliance, even outdoors"
    }',
			'{
        "hs": "droid-2-global-by-motorola", 
        "imageUrl": "img/phones/droid-2-global-by-motorola.0.jpg", 
        "name": "DROID\u2122 2 Global by Motorola", 
        "snippet": "The first smartphone with a 1.2 GHz processor and global capabilities."
    }',
			'{
        "hs": "droid-pro-by-motorola", 
        "imageUrl": "img/phones/droid-pro-by-motorola.0.jpg", 
        "name": "DROID\u2122 Pro by Motorola", 
        "snippet": "The next generation of DOES."
    }',
			'{
        "hs": "motorola-bravo-with-motoblur", 
        "imageUrl": "img/phones/motorola-bravo-with-motoblur.0.jpg", 
        "name": "MOTOROLA BRAVO\u2122 with MOTOBLUR\u2122", 
        "snippet": "An experience to cheer about."
    }',
			'{
        "hs": "motorola-defy-with-motoblur", 
        "imageUrl": "img/phones/motorola-defy-with-motoblur.0.jpg", 
        "name": "Motorola DEFY\u2122 with MOTOBLUR\u2122", 
        "snippet": "Are you ready for everything life throws your way?"
    }',
			'{
        "hs": "t-mobile-mytouch-4g", 
        "imageUrl": "img/phones/t-mobile-mytouch-4g.0.jpg", 
        "name": "T-Mobile myTouch 4G", 
        "snippet": "The T-Mobile myTouch 4G is a premium smartphone designed to deliver blazing fast 4G speeds so that you can video chat from practically anywhere, with or without Wi-Fi."
    }',
			'{
        "hs": "samsung-mesmerize-a-galaxy-s-phone", 
        "imageUrl": "img/phones/samsung-mesmerize-a-galaxy-s-phone.0.jpg", 
        "name": "Samsung Mesmerize\u2122 a Galaxy S\u2122 phone", 
        "snippet": "The Samsung Mesmerize\u2122 delivers a cinema quality experience like you\u2019ve never seen before. Its innovative 4\u201d touch display technology provides rich picture brilliance,even outdoors"
    }',
			'{
        "hs": "sanyo-zio", 
        "imageUrl": "img/phones/sanyo-zio.0.jpg", 
        "name": "SANYO ZIO", 
        "snippet": "The Sanyo Zio by Kyocera is an Android smartphone with a combination of ultra-sleek styling, strong performance and unprecedented value."
    }',
			'{
        "hs": "samsung-transform", 
        "imageUrl": "img/phones/samsung-transform.0.jpg", 
        "name": "Samsung Transform\u2122", 
        "snippet": "The Samsung Transform\u2122 brings you a fun way to customize your Android powered touch screen phone to just the way you like it through your favorite themed \u201cSprint ID Service Pack\u201d."
    }',
			'{
        "hs": "t-mobile-g2", 
        "imageUrl": "img/phones/t-mobile-g2.0.jpg", 
        "name": "T-Mobile G2", 
        "snippet": "The T-Mobile G2 with Google is the first smartphone built for 4G speeds on T-Mobiles new network. Get the information you need, faster than you ever thought possible."
    }',
			'{
        "hs": "motorola-charm-with-motoblur", 
        "imageUrl": "img/phones/motorola-charm-with-motoblur.0.jpg", 
        "name": "Motorola CHARM\u2122 with MOTOBLUR\u2122", 
        "snippet": "Motorola CHARM fits easily in your pocket or palm.  Includes MOTOBLUR service."
    }'
		];

		// Loop through each user above and create the record for them in the database
		foreach ($phones_json_array as $phones_json)
		{
			$phone = json_decode($phones_json, true);
			Phone::create($phone);
		}

	}
}