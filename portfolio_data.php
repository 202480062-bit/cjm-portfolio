<?php
/**
 * Portfolio & CV Data Configuration
 * Careen Joana Mariano - IT Student & Multimedia Creative Designer
 */

$profile = [
    'name' => 'Careen Joana Mariano',
    'first_name' => 'Careen Joana',
    'last_name' => 'Mariano',
    'brand' => 'CJM STUDIO',
    'role' => 'IT Student & Multimedia Creative Designer',
    'hero_headline' => 'CREATE',
    'hero_subheadline' => 'Designs that inspire, ideas that connect.',
    'availability' => 'Available for Freelance & Creative Projects',
    'objective' => 'My main objective for this job is to learn new skills and knowledge in this field of work. I believe that this new venture will help me grow more professionally and personally.',
    'avatar' => 'assets/main_portrait.png',
    'cv_image' => 'assets/Careen_Joana_Mariano_CV.png',
    'contact' => [
        'phone' => '+63 910 305 9527',
        'email' => 'marianocareen0@gmail.com',
        'address' => "People's Ville, Brgy. San Jose, Puerto Princesa City, Palawan"
    ],
    'education' => [
        [
            'period' => '2024 – Present',
            'institution' => 'Palawan State University',
            'program' => 'BS Information Technology',
            'badge' => 'Current'
        ],
        [
            'period' => '2022 – 2024',
            'institution' => 'ACLC College PPC',
            'program' => 'TVL - Information Communication Technology',
            'badge' => 'Graduated'
        ]
    ],
    'experience' => [
        [
            'period' => '2024',
            'role' => 'Intern Graphic Designer',
            'department' => 'IEC Department (Information, Education & Communication)',
            'company' => 'PENRO Palawan',
            'description' => 'Designed environmental awareness merchandise, tumblers, eco-mugs, stickers, official IEC unit polo uniforms, and multimedia campaign materials.'
        ]
    ],
    'skills' => [
        'core' => [
            'Communication Skills',
            'Adaptability Skills',
            'Computer Literate (MS Office, Word, Publisher, Excel)'
        ],
        'creative' => [
            ['name' => 'Video Editing & Motion', 'level' => 95],
            ['name' => 'Web & UI/UX Designing', 'level' => 92],
            ['name' => 'Publication Materials & Infographics', 'level' => 96],
            ['name' => 'Merch, Packaging & Product Labels', 'level' => 94],
            ['name' => 'Brand Identity, Logos & Invitations', 'level' => 93],
            ['name' => 'HTML5, CSS3, JavaScript & PHP', 'level' => 88]
        ],
        'tools' => [
            'Adobe Photoshop', 'Adobe Illustrator', 'Adobe Premiere Pro',
            'CapCut', 'DaVinci Resolve', 'Canva Pro', 'Figma',
            'MS Publisher', 'HTML/CSS/JS', 'PHP'
        ]
    ],
    'references' => [
        [
            'name' => 'Angel Kate C. Cacayan',
            'title' => 'Provincial Environmental and Natural Resources Office (PENRO)-Palawan / Secretary',
            'phone' => '0995-175-2521'
        ],
        [
            'name' => 'Adrian Jhay C. Orge',
            'title' => 'Land Registration Examiner — Brgy. Sta. Monica, Puerto Princesa City, Palawan',
            'phone' => '+63-919-9952-599'
        ]
    ]
];

$categories = [
    'all' => [
        'name' => 'All Works',
        'icon' => 'fa-layer-group',
        'anim' => 'anim-all',
        'desc' => 'Complete showcase across all 12 creative & multimedia disciplines'
    ],
    'video-editing' => [
        'name' => 'Video Editing',
        'icon' => 'fa-film',
        'anim' => 'anim-cinema',
        'desc' => 'Vlogs, short films, documentaries, commercial reels & pre-debut highlights'
    ],
    'web-design' => [
        'name' => 'Web Designing',
        'icon' => 'fa-laptop-code',
        'anim' => 'anim-browser',
        'desc' => 'Modern UI/UX web interfaces, landing pages & full-featured system layouts'
    ],
    'publication-materials' => [
        'name' => 'Publication Materials',
        'icon' => 'fa-bullhorn',
        'anim' => 'anim-editorial',
        'desc' => 'Social media pubmats, organization announcements & campus event graphics'
    ],
    'merch' => [
        'name' => 'Merch',
        'icon' => 'fa-mug-hot',
        'anim' => 'anim-merch',
        'desc' => 'Custom tumblers, ceramic mugs, organization shirts, lanyards, planners & sticker packs'
    ],
    'invitation' => [
        'name' => 'Invitation',
        'icon' => 'fa-envelope-open-text',
        'anim' => 'anim-envelope',
        'desc' => 'Debut, golden anniversary, christening, milestone birthday & dinner invitations'
    ],
    'tarpaulin' => [
        'name' => 'Tarpaulin',
        'icon' => 'fa-scroll',
        'anim' => 'anim-banner',
        'desc' => 'Large-format event banners, birthday tarpaulins & celebration backdrops'
    ],
    'logo-design' => [
        'name' => 'Logo Design',
        'icon' => 'fa-pen-nib',
        'anim' => 'anim-emblem',
        'desc' => 'Academic organization emblems, brand marks & visual identity logos'
    ],
    'product-label' => [
        'name' => 'Product Label',
        'icon' => 'fa-tag',
        'anim' => 'anim-label',
        'desc' => 'Wrap-around jar packaging labels, hygiene product labels & bottle branding'
    ],
    'poster-ads' => [
        'name' => 'Advertisement Poster',
        'icon' => 'fa-rectangle-ad',
        'anim' => 'anim-poster',
        'desc' => 'Commercial food & beverage posters, product ads & promotional campaigns'
    ],
    'thumbnail' => [
        'name' => 'Thumbnail',
        'icon' => 'fa-clapperboard',
        'anim' => 'anim-thumb',
        'desc' => 'High-clickthrough YouTube vlog thumbnails & video cover graphics'
    ],
    'brochure' => [
        'name' => 'Brochure',
        'icon' => 'fa-book-open',
        'anim' => 'anim-brochure',
        'desc' => 'Multi-page booklet covers, printable planners & structured layout spreads'
    ],
    'infographics' => [
        'name' => 'Infographics',
        'icon' => 'fa-chart-pie',
        'anim' => 'anim-infographic',
        'desc' => 'Educational visual guides, historical timelines, mental health & tech infographics'
    ]
];

$portfolioItems = [
    // ==================== VIDEO EDITING ====================
    // Hosted on Google Drive ("CJM Portfolio Videos" folder: 1dXM-NT3CZi3LB-_lrc6ImRZeYQApQoSL)
    [
        'id' => 'vid-1',
        'title' => 'Day in the Life of a Software Engineer — Palawan',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1kXtgkjku8cdg0H25PZYOzOgXQhDJv0Jr/preview',
        'drive_url' => 'https://drive.google.com/file/d/1kXtgkjku8cdg0H25PZYOzOgXQhDJv0Jr/preview',
        'poster' => 'invitation and logo design/el nido.png',
        'subtitle' => 'Lifestyle & Tech Vlog Edit',
        'description' => 'Cinematic pacing, color grading, and storytelling following a software engineer day-in-the-life in Palawan, Philippines.'
    ],
    [
        'id' => 'vid-2',
        'title' => 'Ivory Cat Beauty & Aesthetics Salon',
        'category' => 'video-editing',
        'tags' => ['video-editing', 'poster-ads'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1OkjxAW56GWFDN-VyaxmspEQ7JZlurHek/preview',
        'drive_url' => 'https://drive.google.com/file/d/1OkjxAW56GWFDN-VyaxmspEQ7JZlurHek/preview',
        'poster' => 'assets/posters/vid-2.jpg',
        'subtitle' => 'Commercial Brand Promo Reel',
        'description' => 'Promotional commercial video edit showcasing services and ambiance for Ivory Cat Beauty & Aesthetics Salon.'
    ],
    [
        'id' => 'vid-3',
        'title' => 'Mayel Pre-Debut Film',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/19MmxzlIAe5aj9ZY9Mbpw0vE7i2FQ99jA/preview',
        'drive_url' => 'https://drive.google.com/file/d/19MmxzlIAe5aj9ZY9Mbpw0vE7i2FQ99jA/preview',
        'poster' => 'invitation and logo design/Marielle 18th Invitation.png',
        'subtitle' => 'Pre-Debut Highlight Film',
        'description' => 'Dreamy slow-motion sequences, music synchronization, and warm cinematic tones for an 18th birthday pre-debut teaser.'
    ],
    [
        'id' => 'vid-4',
        'title' => 'Travel Vlog Ep. 01 — Palawan Adventures',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1_ehMZjGVykswkFs9R87RmzdWzXrkKKkP/preview',
        'drive_url' => 'https://drive.google.com/file/d/1_ehMZjGVykswkFs9R87RmzdWzXrkKKkP/preview',
        'poster' => 'invitation and logo design/vlog2_thumbnail.png',
        'subtitle' => 'Travel Vlog Montage',
        'description' => 'Dynamic transitions, upbeat sound design, and travel storytelling across scenic destinations.'
    ],
    [
        'id' => 'vid-5',
        'title' => 'Documentary Film Feature',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1wwcFbKJFLsujruvJJzvWtbthFpTp1TKL/preview',
        'drive_url' => 'https://drive.google.com/file/d/1wwcFbKJFLsujruvJJzvWtbthFpTp1TKL/preview',
        'poster' => 'assets/posters/vid-5.jpg',
        'subtitle' => 'Full Documentary Edit',
        'description' => 'Narrative documentary production with interview cuts, B-roll layering, lower thirds, and atmospheric audio mixing.'
    ],
    [
        'id' => 'vid-6',
        'title' => 'Final Film 2 — Short Narrative',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1w9s4Gi8mkyshzM624XFg0A5Aa0lcixks/preview',
        'drive_url' => 'https://drive.google.com/file/d/1w9s4Gi8mkyshzM624XFg0A5Aa0lcixks/preview',
        'poster' => 'assets/posters/vid-6.jpg',
        'subtitle' => 'Short Narrative Film',
        'description' => 'Dramatic scene editing, continuity cuts, and emotional soundtrack grading.'
    ],
    [
        'id' => 'vid-7',
        'title' => 'Alexa — Special Highlight Edit',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1GJ3Db-DnC6s1AgYcS8t06PvPapoD55OL/preview',
        'drive_url' => 'https://drive.google.com/file/d/1GJ3Db-DnC6s1AgYcS8t06PvPapoD55OL/preview',
        'poster' => 'assets/posters/vid-7.jpg',
        'subtitle' => 'Creative Video Edit',
        'description' => 'Fast-paced creative video edit with custom visual effects and beat-matched transitions.'
    ],
    [
        'id' => 'vid-8',
        'title' => 'Multimedia Final Output Reel',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'video',
        'src' => 'https://drive.google.com/file/d/1a4jqQh5BQ_GxDSO7c6xf7liprXafPhKa/preview',
        'drive_url' => 'https://drive.google.com/file/d/1a4jqQh5BQ_GxDSO7c6xf7liprXafPhKa/preview',
        'poster' => 'assets/posters/vid-8.jpg',
        'subtitle' => 'Multimedia Production Showcase',
        'description' => 'Culminating multimedia video production demonstrating compositing, motion graphics, and sound design.'
    ],
    [
        'id' => 'vid-9',
        'title' => 'Lakbay Aral — Software Engineer Voiceover & Audio',
        'category' => 'video-editing',
        'tags' => ['video-editing'],
        'type' => 'audio',
        'src' => 'video edits/LAKBAY ARAL Software Engineer.mp3',
        'poster' => 'invitation and logo design/vlog2_thumbnail.png',
        'subtitle' => 'Audio Narration & Sound Mastering',
        'description' => 'Clean voiceover recording and audio mastering produced for the Lakbay Aral Software Engineer documentary.'
    ],

    // ==================== WEB DESIGNING ====================
    [
        'id' => 'web-1',
        'title' => 'PSU Media Hub — Interactive Dark UI Website',
        'category' => 'web-design',
        'tags' => ['web-design'],
        'type' => 'image',
        'src' => 'website design and thumbnails/website.png',
        'subtitle' => 'Landing Page UI/UX Mockup',
        'description' => 'Dark-themed modern web interface with glowing neon orange accents designed for PSU Media Hub (Home, About Us, Services).'
    ],
    [
        'id' => 'web-2',
        'title' => 'Automated Voting System — Full UI/UX Suite (10 Screens)',
        'category' => 'web-design',
        'tags' => ['web-design'],
        'type' => 'gallery',
        'src' => 'website design and thumbnails/voting system layout/hompage main.png',
        'gallery' => [
            'website design and thumbnails/voting system layout/hompage main.png',
            'website design and thumbnails/voting system layout/homepage 2.png',
            'website design and thumbnails/voting system layout/homepage3.png',
            'website design and thumbnails/voting system layout/4.png',
            'website design and thumbnails/voting system layout/5.png',
            'website design and thumbnails/voting system layout/6.png',
            'website design and thumbnails/voting system layout/7.png',
            'website design and thumbnails/voting system layout/8.png',
            'website design and thumbnails/voting system layout/9.png',
            'website design and thumbnails/voting system layout/10.png'
        ],
        'subtitle' => 'Complete Web Application UI (10 Screens)',
        'description' => 'End-to-end web system interface design featuring main landing views, candidate dashboards, ballot casting screens, and live tally analytics.'
    ],
    [
        'id' => 'web-3',
        'title' => 'Voting System — Candidate Selection & Portal View',
        'category' => 'web-design',
        'tags' => ['web-design'],
        'type' => 'image',
        'src' => 'website design and thumbnails/voting system layout/homepage 2.png',
        'subtitle' => 'Web Portal Interface',
        'description' => 'Clean dashboard layout for student authentication and interactive candidate selection.'
    ],
    [
        'id' => 'web-4',
        'title' => 'Voting System — Analytics & Live Results Dashboard',
        'category' => 'web-design',
        'tags' => ['web-design'],
        'type' => 'image',
        'src' => 'website design and thumbnails/voting system layout/homepage3.png',
        'subtitle' => 'Admin & Analytics UI',
        'description' => 'Structured interface layout highlighting real-time voting progress and system administration.'
    ],

    // ==================== THUMBNAILS ====================
    [
        'id' => 'thumb-1',
        'title' => 'A Week in El Nido — Software Engineer Offsite',
        'category' => 'thumbnail',
        'tags' => ['thumbnail'],
        'type' => 'image',
        'src' => 'invitation and logo design/el nido.png',
        'subtitle' => 'YouTube Vlog Thumbnail',
        'description' => 'Magazine-style tropical collage thumbnail for "A Week in El Nido — Software Engineer Offsite" with bold cutout typography.'
    ],
    [
        'id' => 'thumb-2',
        'title' => 'Software Engineer Off Site — Travel Vlog Ep. 2',
        'category' => 'thumbnail',
        'tags' => ['thumbnail'],
        'type' => 'image',
        'src' => 'invitation and logo design/vlog2_thumbnail.png',
        'subtitle' => '3-Panel YouTube Thumbnail',
        'description' => 'Split 3-destination showcase thumbnail ("3 Destinations in 1 Trip — Travel Vlog Ep. 2") with high-contrast badge overlays.'
    ],

    // ==================== LOGO DESIGN ====================
    [
        'id' => 'logo-1',
        'title' => 'College of Sciences NSTP-CWTS Official Emblem',
        'category' => 'logo-design',
        'tags' => ['logo-design'],
        'type' => 'image',
        'src' => 'invitation and logo design/cs.png',
        'subtitle' => 'Institutional & Collegiate Logo',
        'description' => 'Circular academic seal for Palawan State University College of Sciences NSTP-CWTS featuring civic, nature, and science iconography.'
    ],
    [
        'id' => 'logo-2',
        'title' => 'Estudyante Hub — Brand Identity Logo',
        'category' => 'logo-design',
        'tags' => ['logo-design'],
        'type' => 'image',
        'src' => 'invitation and logo design/Estudyante.png',
        'subtitle' => 'Brand Identity & Emblem',
        'description' => 'Warm academic crest featuring a graduation cap, open book, laurel wreath, and sun rays for Estudyante Hub.'
    ],

    // ==================== INVITATION ====================
    [
        'id' => 'inv-1',
        'title' => "Marielle's 18th Debut Celebration Invitation",
        'category' => 'invitation',
        'tags' => ['invitation'],
        'type' => 'image',
        'src' => 'invitation and logo design/Marielle 18th Invitation.png',
        'subtitle' => '18th Birthday Debut Invitation',
        'description' => 'Elegant debut invitation card with refined script typography and floral accents.'
    ],
    [
        'id' => 'inv-2',
        'title' => '50th Golden Wedding Anniversary Invitation',
        'category' => 'invitation',
        'tags' => ['invitation'],
        'type' => 'image',
        'src' => 'invitation and logo design/golden anniv invitation.png',
        'subtitle' => 'Golden Anniversary Suite',
        'description' => 'Luxurious gold-accented milestone anniversary invitation layout.'
    ],
    [
        'id' => 'inv-3',
        'title' => "Ian's Christening — Baptismal Invitation Suite",
        'category' => 'invitation',
        'tags' => ['invitation'],
        'type' => 'gallery',
        'src' => 'invitation and logo design/ian christening.png',
        'gallery' => [
            'invitation and logo design/ian christening.png',
            'invitation and logo design/ian christening (1).png'
        ],
        'subtitle' => '2-Page Christening Invitation',
        'description' => 'Soft, welcoming baptismal invitation set featuring main event details and godparents roster.'
    ],
    [
        'id' => 'inv-4',
        'title' => 'Ptr. Zaldy Villon — 60th Birthday Party Invitation',
        'category' => 'invitation',
        'tags' => ['invitation'],
        'type' => 'gallery',
        'src' => 'invitation and logo design/layout2.png',
        'gallery' => [
            'invitation and logo design/layout2.png',
            'invitation and logo design/pastor zaldy invitation.png',
            'invitation and logo design/pastor zaldy invitation (1).png'
        ],
        'subtitle' => 'Milestone 60th Birthday Suite',
        'description' => 'Editorial magazine-inspired 60th birthday invitation suite for Ptr. Zaldy Villon with event program cards.'
    ],
    [
        'id' => 'inv-5',
        'title' => 'Couples Night — Romantic Dinner Invitation',
        'category' => 'invitation',
        'tags' => ['invitation'],
        'type' => 'image',
        'src' => 'invitation and logo design/basta.png',
        'subtitle' => 'Special Event Dinner Card',
        'description' => 'Warm candlelit dinner invitation card for Couples Night (February 28, 2025 at 6:00 PM).'
    ],

    // ==================== TARPAULIN ====================
    [
        'id' => 'tarp-1',
        'title' => 'Happy 7th Birthday Chyn — Event Tarpaulin',
        'category' => 'tarpaulin',
        'tags' => ['tarpaulin'],
        'type' => 'image',
        'src' => 'invitation and logo design/Untitled Design (4).png',
        'subtitle' => 'Children’s Birthday Tarpaulin',
        'description' => 'Playful pink pastel butterfly and balloon collage tarpaulin backdrop for Chyn’s 7th Birthday.'
    ],
    [
        'id' => 'tarp-2',
        'title' => 'Happy 18th Birthday — Large Format Banner',
        'category' => 'tarpaulin',
        'tags' => ['tarpaulin'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/MARIANO,SANDOVAL - BDAY BANNER.jpg',
        'subtitle' => '18th Birthday Celebration Tarpaulin',
        'description' => 'Bold green and white layered photo collage tarpaulin banner created in Adobe Photoshop.'
    ],

    // ==================== PUBLICATION MATERIALS ====================
    [
        'id' => 'pub-1',
        'title' => 'Multimedia Creative Workshop — IT Dept Event Pubmat',
        'category' => 'publication-materials',
        'tags' => ['publication-materials', 'poster-ads'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/MARIANO_CAREENJOANA_PHOTOSHOP.jpg',
        'subtitle' => 'Department Workshop Poster',
        'description' => 'Official event publication material for the IT Department Multimedia Creative Workshop featuring Adobe & video production tools.'
    ],
    [
        'id' => 'pub-2',
        'title' => 'SITE Carnival Booth — Campus Fair Pubmat',
        'category' => 'publication-materials',
        'tags' => ['publication-materials', 'poster-ads'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/site booth.png',
        'subtitle' => 'Student Organization Pubmat',
        'description' => 'Festive carnival-themed announcement poster for the Society of Information Technology Enthusiasts (SITE) booth games and treats.'
    ],
    [
        'id' => 'pub-3',
        'title' => 'SITE Family Feud — Game Show Event Pubmat',
        'category' => 'publication-materials',
        'tags' => ['publication-materials'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/g.png',
        'subtitle' => 'Interactive Event Graphic',
        'description' => 'Vibrant retro game-show themed publication material for the SITE Family Feud campus competition.'
    ],
    [
        'id' => 'pub-4',
        'title' => 'Welcome Back AMA Students — Back-to-School Pubmat',
        'category' => 'publication-materials',
        'tags' => ['publication-materials'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/Your paragraph text.png',
        'subtitle' => 'Academic Welcome Announcement',
        'description' => 'Energetic crimson and gold back-to-school publication graphic welcoming AMA students.'
    ],
    [
        'id' => 'pub-5',
        'title' => 'SITE Official Organization Shirt — Release Pubmat',
        'category' => 'publication-materials',
        'tags' => ['publication-materials', 'merch'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/Design (1).png',
        'subtitle' => 'Merchandise Launch Pubmat',
        'description' => 'Tech-styled promotional publication card showcasing the front and back design of the SITE organization shirt.'
    ],
    [
        'id' => 'pub-6',
        'title' => 'SITE Official Lanyard — Release Pubmat',
        'category' => 'publication-materials',
        'tags' => ['publication-materials', 'merch'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/Design.png',
        'subtitle' => 'Lanyard Showcase Pubmat',
        'description' => 'Official merchandise publication layout featuring the SITE circuit-patterned ID lanyard and badge holder.'
    ],

    // ==================== MERCH DESIGN ====================
    [
        'id' => 'merch-1',
        'title' => 'CENRO / PENRO Palawan — IEC Unit Official Polo Uniform',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'gallery',
        'src' => 'Merch Design/penro.png',
        'gallery' => [
            'Merch Design/penro.png',
            'Merch Design/penro (1).png'
        ],
        'subtitle' => 'Apparel & Uniform Design',
        'description' => 'Custom white and olive-green polo shirt uniform designed for the Information, Education and Communication (IEC) Unit of CENRO/PENRO Palawan.'
    ],
    [
        'id' => 'merch-2',
        'title' => 'PENRO Palawan — "Nurture Nature" Matte Black Tumbler',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/9.png',
        'subtitle' => 'Insulated Flask Merch',
        'description' => 'Sleek matte-black thermos tumbler featuring a "Nurture Nature" botanical hand illustration for PENRO Palawan.'
    ],
    [
        'id' => 'merch-3',
        'title' => 'PENRO Palawan — "Reduce, Reuse, Recycle" Black Tumbler',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/8.png',
        'subtitle' => 'Eco Campaign Tumbler',
        'description' => 'Bold hand-lettered "Reduce Reuse Recycle" eco-advocacy insulated tumbler mockup for PENRO Palawan.'
    ],
    [
        'id' => 'merch-4',
        'title' => 'PENRO Palawan — "Keep Calm and Just Go Green" Tumbler',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/5.png',
        'subtitle' => 'White Eco Flask Mockup',
        'description' => 'Clean white thermos flask with falling green foliage and environmental slogan for PENRO Palawan.'
    ],
    [
        'id' => 'merch-5',
        'title' => 'PENRO Palawan — "Need Water" Splash Tumbler',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/6.png',
        'subtitle' => 'Water Conservation Merch',
        'description' => 'Refreshing dynamic water-splash tumbler wrap design promoting water conservation with PENRO Palawan branding.'
    ],
    [
        'id' => 'merch-6',
        'title' => 'PENRO Palawan — "Hydrate" Frosted Blue Tumbler',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/7.png',
        'subtitle' => 'Modern Typography Flask',
        'description' => 'Textured aqua-blue gradient tumbler featuring stacked outline and solid "HYDRATE" typography.'
    ],
    [
        'id' => 'merch-7',
        'title' => '"Think Green" Cute Earth Ceramic Mug',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/2.png',
        'subtitle' => 'Ceramic Mug Mockup',
        'description' => 'Playful illustrated globe character mug with a glowing lightbulb idea icon and "Think Green" lettering.'
    ],
    [
        'id' => 'merch-8',
        'title' => '"A Tree For Peace" Ceramic Mug',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/4.png',
        'subtitle' => 'Eco Peace Mug Design',
        'description' => 'Minimalist white ceramic mug combining a leafy tree illustration, green peace emblem, and "A Tree For Peace" typography.'
    ],
    [
        'id' => 'merch-9',
        'title' => '"Keep Calm and Just Go Green" Ceramic Mug',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/1.png',
        'subtitle' => 'Botanical Mug Mockup',
        'description' => 'Everyday ceramic coffee mug featuring organic green leaf accents and eco-friendly typography.'
    ],
    [
        'id' => 'merch-10',
        'title' => '"Clean Earth, Happy Earth" Ceramic Mug',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/3.png',
        'subtitle' => 'Illustrated Earth Mug',
        'description' => 'Cheerful circular badge mug illustration encouraging environmental stewardship.'
    ],
    [
        'id' => 'merch-11',
        'title' => 'Earth Day & Zero Waste — Die-Cut Sticker Pack',
        'category' => 'merch',
        'tags' => ['merch'],
        'type' => 'image',
        'src' => 'Merch Design/Untitled Design (5).png',
        'subtitle' => '10-Piece Eco Sticker Sheet',
        'description' => 'Complete environmental awareness sticker collection ("Go Clean Go Green", "Love The Earth", "Zero Waste", "Save Our Planet").'
    ],

    // ==================== BROCHURE & PLANNERS ====================
    [
        'id' => 'broch-1',
        'title' => 'Botanical Monthly Planner — Cover & Interior Spreads',
        'category' => 'brochure',
        'tags' => ['brochure', 'merch'],
        'type' => 'gallery',
        'src' => 'Merch Design/Brown and Beige Abstract Monthly Planner.png',
        'gallery' => [
            'Merch Design/Brown and Beige Abstract Monthly Planner.png',
            'Merch Design/Brown and Beige Abstract Monthly Planner (1).png',
            'Merch Design/Brown and Beige Abstract Monthly Planner (2).png'
        ],
        'subtitle' => '3-Page Printable Planner Booklet',
        'description' => 'Minimalist sage and beige botanical booklet cover paired with structured monthly calendar grids, to-do lists, and notes pages.'
    ],
    [
        'id' => 'broch-2',
        'title' => 'Productive Works — Kraft & Green Booklet Cover',
        'category' => 'brochure',
        'tags' => ['brochure', 'merch'],
        'type' => 'image',
        'src' => 'Merch Design/FRONT PAGE.png',
        'subtitle' => 'Booklet & Brochure Front Cover',
        'description' => 'Organic kraft-paper and speckled forest-green editorial cover layout titled "Productive Works".'
    ],
    [
        'id' => 'broch-3',
        'title' => 'Productive Works — Daily Planner & Appointment Spreads',
        'category' => 'brochure',
        'tags' => ['brochure', 'merch'],
        'type' => 'gallery',
        'src' => 'Merch Design/planner.png',
        'gallery' => [
            'Merch Design/planner.png',
            'Merch Design/planner (1).png',
            'Merch Design/planner (2).png'
        ],
        'subtitle' => '3-Page Daily Organizer Suite',
        'description' => 'Clean warm-neutral cover and interior daily scheduling pages with checkboxes, dotted appointment grids, and ruled notes.'
    ],

    // ==================== PRODUCT LABEL ====================
    [
        'id' => 'label-1',
        'title' => "Theo's Delights — Peanut Butter Wrap-Around Jar Label",
        'category' => 'product-label',
        'tags' => ['product-label'],
        'type' => 'image',
        'src' => 'poster ads and product label/peanut butterbonia (2).png',
        'subtitle' => 'Commercial Food Packaging Label',
        'description' => 'Full 360° wrap-around product label for Theo\'s Delights Peanut Butter ("Spread the Goodness") with nutrition story, contact details, and inspirational verse.'
    ],
    [
        'id' => 'label-2',
        'title' => 'Creation Care — Pure Hands Anti-Bacterial Soap Gel Label',
        'category' => 'product-label',
        'tags' => ['product-label', 'poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/deswasing (1).png',
        'subtitle' => 'Hygiene Product Label & Ad',
        'description' => 'Soft rose-pink packaging label and product graphic for Creation Care Pure Hands Hand Soap Gel ("Pure defense, soft touch").'
    ],
    [
        'id' => 'label-3',
        'title' => 'Creation Care — Grease Guard Dishwashing Gel Label & Ad',
        'category' => 'product-label',
        'tags' => ['product-label', 'poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/Blue Brush Strokes Cleaner Product YouTube Video Ad (1).png',
        'subtitle' => 'Household Product Label & Display Ad',
        'description' => 'Fresh aqua-blue product branding for Creation Care Grease Guard Dishwashing Gel ("The clean you can trust").'
    ],

    // ==================== ADVERTISEMENT POSTER ====================
    [
        'id' => 'post-1',
        'title' => "Theo's Delights — 4-Flavor Tapioca & Jelly Desserts Poster",
        'category' => 'poster-ads',
        'tags' => ['poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/4 flavor poster (2).png',
        'subtitle' => 'Beverage & Dessert Promo Poster',
        'description' => 'Mouthwatering golden promotional poster showcasing Avocado Tapioca, Coffee Jelly, Mango Tapioca, and Melon Tapioca bottles with fresh fruit accents.'
    ],
    [
        'id' => 'post-2',
        'title' => "Theo's Delights — Coffee Jelly & Mango Tapioca Ad",
        'category' => 'poster-ads',
        'tags' => ['poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/basta poster.png',
        'subtitle' => 'Rich Espresso & Mango Poster Ad',
        'description' => 'Floating bottle commercial poster with roasted coffee beans and diced mango cubes for Theo\'s Delights.'
    ],
    [
        'id' => 'post-3',
        'title' => "Theo's Delights — Avocado & Melon Tapioca Ad",
        'category' => 'poster-ads',
        'tags' => ['poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/basta poster (1).png',
        'subtitle' => 'Fresh Fruit Dessert Poster Ad',
        'description' => 'Vibrant green product advertisement with floating avocado and cantaloupe slices.'
    ],
    [
        'id' => 'post-4',
        'title' => "Meshell's Food House — Rice Bowl Chicken Wings Poster",
        'category' => 'poster-ads',
        'tags' => ['poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/chicken ricebowl.png',
        'subtitle' => 'Restaurant Menu & Promo Poster',
        'description' => 'Fiery red food advertisement highlighting Buffalo Wings, Teriyaki Wings, and Cheesy Garlic Wings rice bowls.'
    ],
    [
        'id' => 'post-5',
        'title' => 'Sandra Meshel Delicious — ₱45 Siomai Rice Promo Ad',
        'category' => 'poster-ads',
        'tags' => ['poster-ads'],
        'type' => 'image',
        'src' => 'poster ads and product label/CHECKEN.png',
        'subtitle' => 'Social Media Food Ad',
        'description' => 'High-impact square food advertisement highlighting affordable ₱45.00 Siomai Rice.'
    ],

    // ==================== INFOGRAPHICS ====================
    [
        'id' => 'info-1',
        'title' => '2D vs 3D Animation & Graphics — Comparative Infographic',
        'category' => 'infographics',
        'tags' => ['infographics'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/2d 3d infograph.png',
        'subtitle' => 'Technical Multimedia Infographic',
        'description' => 'Educational infographic breaking down the differences, pipelines, and applications of 2D and 3D digital graphics.'
    ],
    [
        'id' => 'info-2',
        'title' => 'Understanding Anxiety — Mental Health Infographic',
        'category' => 'infographics',
        'tags' => ['infographics'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/ANXIETY.png',
        'subtitle' => 'Health & Wellness Infographic',
        'description' => 'Clear, empathetic visual guide detailing symptoms, coping strategies, and support resources for anxiety awareness.'
    ],
    [
        'id' => 'info-3',
        'title' => "It's Okay Not To Be Okay — Guidance Center Infographic",
        'category' => 'infographics',
        'tags' => ['infographics', 'publication-materials'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/Mariano-labact2(multimedia).png',
        'subtitle' => 'Mental Health Awareness Campaign',
        'description' => 'Advocacy infographic poster created for the Student Affairs Office / Guidance & Counseling Center (guidance@psu.edu.ph).'
    ],
    [
        'id' => 'info-4',
        'title' => 'Comprehensive Multimedia Infographic Final Output',
        'category' => 'infographics',
        'tags' => ['infographics'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/infographic final output 1.png',
        'subtitle' => 'Data & Process Infographic',
        'description' => 'Structured vertical infographic combining custom iconography, visual hierarchy, and data storytelling.'
    ],
    [
        'id' => 'info-5',
        'title' => 'The Road to Liberty — Historical Timeline Infographic',
        'category' => 'infographics',
        'tags' => ['infographics'],
        'type' => 'image',
        'src' => 'publication materials and Inforgraphics/the road to liberty.png',
        'subtitle' => 'Historical Visual Timeline',
        'description' => 'Illustrated historical roadmap and milestone infographic titled "The Road to Liberty".'
    ]
];
?>
