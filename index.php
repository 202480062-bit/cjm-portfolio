<?php
require_once __DIR__ . '/portfolio_data.php';

function encodeAssetUrl(string $path): string {
    if ($path === '') return '';
    if (preg_match('#^https?://#i', $path)) return $path;
    $parts = explode('/', $path);
    $encoded = array_map('rawurlencode', $parts);
    return implode('/', $encoded);
}

$categoryCounts = [];
foreach ($categories as $catKey => $catMeta) {
    if ($catKey === 'all') {
        $categoryCounts['all'] = count($portfolioItems);
    } else {
        $count = 0;
        foreach ($portfolioItems as $item) {
            if ($item['category'] === $catKey || in_array($catKey, $item['tags'] ?? [], true)) {
                $count++;
            }
        }
        $categoryCounts[$catKey] = $count;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($profile['name']) ?> — Portfolio & Creative Studio</title>
    <meta name="description" content="Official Multimedia, Graphic Design, Video Editing & Web Design Portfolio of Careen Joana Mariano, BS Information Technology Student at Palawan State University.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Outfit:wght@600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="style.css?v=10">
</head>
<body>

    <div class="ambient-canvas" aria-hidden="true">
        <div class="ambient-orb orb-1"></div>
        <div class="ambient-orb orb-2"></div>
        <div class="ambient-orb orb-3"></div>
    </div>
    <div class="noise-overlay" aria-hidden="true"></div>

    <header class="top-navbar">
        <a href="#home" class="brand-logo">
            <div class="brand-mark">CJ</div>
            <div class="brand-text">
                <span class="brand-title"><?= htmlspecialchars($profile['brand']) ?></span>
                <span class="brand-sub">Creative Portfolio</span>
            </div>
        </a>

        <ul class="nav-links">
            <li><a href="#home" class="active">Home</a></li>
            <li><a href="#work">Works (<?= $categoryCounts['all'] ?>)</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

        <div class="nav-actions">
            <button type="button" class="theme-btn" id="themeToggleBtn" title="Toggle Glass Theme" aria-label="Toggle Glass Theme">
                <i class="fa-solid fa-sun"></i>
            </button>
            <a href="#contact" class="nav-cta">Hire Me <i class="fa-solid fa-arrow-up-right-from-square" style="font-size:0.72rem;margin-left:4px;"></i></a>
        </div>
    </header>

    <section class="hero-wrapper" id="home">
        <div class="omnic-stage">

            <div class="hero-inner-window">

                <div class="portfolio-watermark" aria-hidden="true">PORTFOLIO</div>

                <div class="hero-left-pane">
                    <div class="window-mini-brand">
                        <i class="fa-solid fa-wand-magic-sparkles"></i>
                        <span>CJM Studio - Multimedia</span>
                    </div>

                    <div class="create-block">
                        <div class="role-kicker">
                            <?= htmlspecialchars($profile['role']) ?>
                        </div>
                        <h1 class="create-display"><?= htmlspecialchars($profile['hero_headline']) ?></h1>
                        <p class="create-tagline"><?= htmlspecialchars($profile['hero_subheadline']) ?></p>

                        <div class="hero-btn-group">
                            <a href="#work" class="btn-view-work">
                                <span>View Work</span>
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                            <button type="button" class="btn-view-work js-open-cv">
                                <i class="fa-regular fa-id-card"></i>
                                <span>View CV</span>
                            </button>
                        </div>
                    </div>

                    <div class="hero-trust-row">
                        <div class="trust-icons">
                            <div class="trust-Chip" title="Video Editing"><i class="fa-solid fa-film"></i></div>
                            <div class="trust-Chip" title="Web Designing"><i class="fa-solid fa-code"></i></div>
                            <div class="trust-Chip" title="Graphic & Merch Design"><i class="fa-solid fa-palette"></i></div>
                            <div class="trust-Chip count">+12</div>
                        </div>
                        <div class="trust-caption">
                            <strong>47+ Authentic Projects</strong><br>
                            Across 12 Creative &amp; IT Categories
                        </div>
                    </div>
                </div>

                <div class="hero-center-portrait">
                    <div class="portrait-halo">
                        <div class="portrait-cutout-wrap">
                            <img src="<?= encodeAssetUrl($profile['avatar']) ?>?v=8" alt="<?= htmlspecialchars($profile['name']) ?>">
                        </div>
                        <div class="portrait-caption-below">
                            <h2 class="portrait-name-below"><?= htmlspecialchars($profile['name']) ?></h2>
                            <div class="portrait-role-below">Digital Designer &amp; Video Editor</div>
                        </div>
                    </div>
                </div>

                <div class="hero-right-pane">
                    <nav class="window-top-links" aria-label="Hero Quick Links">
                        <a href="#home">Home</a>
                        <a href="#work">Work</a>
                        <a href="#services">Services</a>
                        <a href="#contact">Contact</a>
                    </nav>
                </div>

            </div>
        </div>
    </section>

    <section class="section-container" id="work">
        <div class="section-header">
            <h2 class="section-title">Explore My <span>Creative Works</span></h2>
            <p class="section-desc">
                Select any of the 12 categories below to filter and inspect real projects from my portfolio. Click any card to launch the full interactive viewer or video player.
            </p>
        </div>

        <div class="portfolio-controls-glass">
            <div class="filter-top-bar">
                <div class="active-cat-banner">
                    <div class="active-cat-icon" id="activeCatIcon">
                        <i class="fa-solid fa-layer-group"></i>
                    </div>
                    <div class="active-cat-text">
                        <h3>
                            <span id="activeCatName">All Works</span>
                            <span class="anim-badge" id="activeCatAnimBadge" style="display:none;">Curated Collection</span>
                        </h3>
                        <p id="activeCatDesc">Complete showcase across all 12 creative &amp; multimedia disciplines</p>
                    </div>
                </div>

                <div class="search-box">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="search" id="portfolioSearch" placeholder="Search works (e.g. PENRO, vlog, logo, Theo's)...">
                </div>
            </div>

            <div class="category-pills" role="tablist" aria-label="Portfolio Categories">
                <?php foreach ($categories as $catKey => $catMeta): ?>
                    <button
                        type="button"
                        class="cat-pill <?= $catKey === 'all' ? 'active' : '' ?>"
                        data-category="<?= htmlspecialchars($catKey) ?>"
                    >
                        <i class="fa-solid <?= htmlspecialchars($catMeta['icon']) ?>"></i>
                        <span><?= htmlspecialchars($catMeta['name']) ?></span>
                        <span class="pill-count"><?= $categoryCounts[$catKey] ?? 0 ?></span>
                    </button>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="portfolio-grid" id="portfolioGrid">
            <?php foreach ($portfolioItems as $index => $item):
                $catKey = $item['category'];
                $catMeta = $categories[$catKey] ?? $categories['all'];
                $tagsAttr = implode(',', $item['tags'] ?? [$catKey]);
                $safeSrc = encodeAssetUrl($item['src']);
                $safePoster = encodeAssetUrl($item['poster'] ?? '');
                $isGallery = ($item['type'] === 'gallery' && !empty($item['gallery']));
                $galleryCount = $isGallery ? count($item['gallery']) : 1;
            ?>
                <article
                    class="work-card enter-anim-all"
                    data-id="<?= htmlspecialchars($item['id']) ?>"
                    data-category="<?= htmlspecialchars($catKey) ?>"
                    data-tags="<?= htmlspecialchars($tagsAttr) ?>"
                    data-title="<?= htmlspecialchars($item['title']) ?>"
                    data-desc="<?= htmlspecialchars($item['description']) ?>"
                >
                    <div class="work-media">
                        <?php if ($catKey === 'web-design'): ?>
                            <div class="browser-chrome">
                                <span class="browser-dot red"></span>
                                <span class="browser-dot yellow"></span>
                                <span class="browser-dot green"></span>
                                <span class="browser-url">ui-design://<?= htmlspecialchars($item['id']) ?></span>
                            </div>
                        <?php endif; ?>

                        <div class="media-top-badges">
                            <span class="cat-tag-pill">
                                <i class="fa-solid <?= htmlspecialchars($catMeta['icon']) ?>"></i>
                                <?= htmlspecialchars($catMeta['name']) ?>
                            </span>
                            <?php if ($isGallery): ?>
                                <span class="multi-badge">
                                    <i class="fa-regular fa-images"></i> <?= $galleryCount ?> Pages
                                </span>
                            <?php elseif ($item['type'] === 'video'): ?>
                                <span class="multi-badge">
                                    <i class="fa-solid fa-video"></i> MP4 Video
                                </span>
                            <?php elseif ($item['type'] === 'audio'): ?>
                                <span class="multi-badge">
                                    <i class="fa-solid fa-Volume-high"></i> MP3 Audio
                                </span>
                            <?php endif; ?>
                        </div>

                        <?php if ($item['type'] === 'video'): ?>
                            <?php if (strpos($item['src'], 'drive.google.com') !== false): ?>
                                <?php if ($safePoster): ?>
                                    <img src="<?= $safePoster ?>" alt="<?= htmlspecialchars($item['title']) ?>" loading="lazy">
                                <?php endif; ?>
                            <?php else: ?>
                                <video
                                    class="hover-preview-video"
                                    src="<?= $safeSrc ?>"
                                    <?= $safePoster ? 'poster="' . $safePoster . '"' : '' ?>
                                    muted
                                    loop
                                    playsinline
                                    preload="metadata"
                                ></video>
                            <?php endif; ?>
                            <div class="play-indicator">
                                <i class="fa-solid fa-play"></i>
                            </div>
                        <?php elseif ($item['type'] === 'audio'): ?>
                            <div class="audio-wave-backdrop">
                                <span class="wave-bar" style="animation-delay:0.1s"></span>
                                <span class="wave-bar" style="animation-delay:0.3s"></span>
                                <span class="wave-bar" style="animation-delay:0.0s"></span>
                                <span class="wave-bar" style="animation-delay:0.4s"></span>
                                <span class="wave-bar" style="animation-delay:0.2s"></span>
                                <span class="wave-bar" style="animation-delay:0.5s"></span>
                            </div>
                            <div class="play-indicator">
                                <i class="fa-solid fa-headphones"></i>
                            </div>
                        <?php else: ?>
                            <img src="<?= $safeSrc ?>" alt="<?= htmlspecialchars($item['title']) ?>" loading="lazy">
                        <?php endif; ?>
                    </div>

                    <div class="work-body">
                        <div>
                            <div class="work-subtitle"><?= htmlspecialchars($item['subtitle']) ?></div>
                            <h3 class="work-title"><?= htmlspecialchars($item['title']) ?></h3>
                            <p class="work-desc"><?= htmlspecialchars($item['description']) ?></p>
                        </div>

                        <div class="work-footer">
                            <span class="work-action-link" style="margin-left:auto;">
                                Open <i class="fa-solid fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section-container" id="services">
        <div class="section-header">
            <div class="section-kicker">
                <i class="fa-solid fa-wand-magic-sparkles"></i>
                <span>What I Do</span>
            </div>
            <h2 class="section-title">12 Creative &amp; <span>IT Services</span></h2>
            <p class="section-desc">
                Combining my BS Information Technology foundation with hands-on graphic design &amp; multimedia production experience. Click any discipline below to filter its sample works.
            </p>
        </div>

        <div class="services-grid">
            <?php foreach ($categories as $catKey => $catMeta):
                if ($catKey === 'all') continue;
            ?>
                <div class="service-glass-card" data-jump-category="<?= htmlspecialchars($catKey) ?>">
                    <div class="service-icon-wrap">
                        <i class="fa-solid <?= htmlspecialchars($catMeta['icon']) ?>"></i>
                    </div>
                    <h3><?= htmlspecialchars($catMeta['name']) ?></h3>
                    <p><?= htmlspecialchars($catMeta['desc']) ?></p>
                    <span class="service-explore">
                        Explore <?= $categoryCounts[$catKey] ?? 0 ?> Samples <i class="fa-solid fa-arrow-right"></i>
                    </span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="section-container" id="contact">
        <div class="section-header">
            <div class="section-kicker">
                <i class="fa-regular fa-paper-plane"></i>
                <span>Let’s Collaborate</span>
            </div>
            <h2 class="section-title">Start a <span>Creative Project</span></h2>
            <p class="section-desc">
                Need video editing, web UI/UX design, publication materials, custom merch, product labels, or event invitations? Send an inquiry below.
            </p>
        </div>

        <div class="contact-grid">
            <div class="contact-info-glass">
                <h3 class="contact-pane-title">Direct Contact Channels</h3>
                <p class="contact-pane-desc">
                    Based in Puerto Princesa City, Palawan. Available for remote and local creative commissions, student organization pubmats, and freelance design projects.
                </p>

                <div class="contact-method-card">
                    <div class="contact-method-icon"><i class="fa-solid fa-phone-volume"></i></div>
                    <div>
                        <div class="contact-method-label">Phone / SMS / Viber</div>
                        <div class="contact-method-val"><?= htmlspecialchars($profile['contact']['phone']) ?></div>
                    </div>
                </div>

                <div class="contact-method-card">
                    <div class="contact-method-icon"><i class="fa-solid fa-envelope-open-text"></i></div>
                    <div>
                        <div class="contact-method-label">Email Address</div>
                        <div class="contact-method-val"><?= htmlspecialchars($profile['contact']['email']) ?></div>
                    </div>
                </div>

                <div class="contact-method-card">
                    <div class="contact-method-icon"><i class="fa-solid fa-map-location-dot"></i></div>
                    <div>
                        <div class="contact-method-label">Location</div>
                        <div class="contact-method-val"><?= htmlspecialchars($profile['contact']['address']) ?></div>
                    </div>
                </div>
            </div>

            <div class="contact-form-glass">
                <h3 class="contact-form-title">Send a Project Inquiry</h3>
                <form id="portfolioContactForm" name="portfolio-contact" data-netlify="true" action="contact_handler.php" method="POST">
                    <input type="hidden" name="form-name" value="portfolio-contact">
                    <div class="form-row">
                        <div class="form-group" style="margin-bottom:0;">
                            <label for="inqName">Your Name *</label>
                            <input type="text" id="inqName" name="name" required placeholder="e.g. Juan Dela Cruz">
                        </div>
                        <div class="form-group" style="margin-bottom:0;">
                            <label for="inqEmail">Your Email *</label>
                            <input type="email" id="inqEmail" name="email" required placeholder="you@example.com">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group" style="margin-bottom:0;">
                            <label for="inquiryService">Category / Service Needed</label>
                            <select id="inquiryService" name="service">
                                <?php foreach ($categories as $catKey => $catMeta):
                                    if ($catKey === 'all') continue;
                                ?>
                                    <option value="<?= htmlspecialchars($catMeta['name']) ?>"><?= htmlspecialchars($catMeta['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group" style="margin-bottom:0;">
                            <label for="inqBudget">Project Timeline / Type</label>
                            <select id="inqBudget" name="budget">
                                <option value="Standard Commission">Standard Commission</option>
                                <option value="Rush Project (24-48h)">Rush Project (24–48 hrs)</option>
                                <option value="Campus / Org Partnership">Campus / Org Partnership</option>
                                <option value="Internship / Part-Time">Internship / Part-Time Role</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inqMessage">Project Details &amp; Vision *</label>
                        <textarea id="inqMessage" name="message" rows="4" required placeholder="Tell me about your video edit, website layout, merch, poster, invitation, or publication material..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit">
                        <i class="fa-solid fa-paper-plane"></i> Send Message to Careen
                    </button>
                    <div id="formStatus" class="form-status"></div>
                </form>
            </div>
        </div>
    </section>

    <div class="lightbox-modal" id="lightboxModal" role="dialog" aria-modal="true" aria-labelledby="lightboxTitle">
        <div class="lightbox-dialog">
            <button type="button" class="lightbox-close" id="lightboxClose" aria-label="Close Viewer">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="lightbox-stage" id="lightboxStage"></div>

            <div class="lightbox-details">
                <div>
                    <div class="work-subtitle" id="lightboxCategory">Category</div>
                    <h3 class="work-title" id="lightboxTitle" style="font-size:1.45rem;margin-bottom:14px;">Project Title</h3>
                    <p class="work-desc" id="lightboxDesc" style="font-size:0.92rem;">Description</p>
                </div>

                <div style="display:flex;flex-direction:column;gap:10px;margin-top:24px;">
                    <button type="button" class="btn-submit" id="lightboxInquireBtn">
                        <i class="fa-solid fa-wand-magic-sparkles"></i> Request Similar Design
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="lightbox-modal" id="cvModal" role="dialog" aria-modal="true" aria-labelledby="cvModalTitle">
        <div class="cv-modal-sheet">
            <button type="button" class="lightbox-close" id="cvModalClose" aria-label="Close CV">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <div class="cv-sheet-grid">

                <div class="cv-sheet-left">
                    <div class="cv-sheet-portrait">
                        <img src="<?= encodeAssetUrl($profile['avatar']) ?>?v=9" alt="<?= htmlspecialchars($profile['name']) ?>">
                    </div>

                    <div class="cv-sheet-side-section">
                        <h4>Objective</h4>
                        <p><?= htmlspecialchars($profile['objective']) ?></p>
                    </div>

                    <div class="cv-sheet-side-section">
                        <h4>Contact</h4>
                        <ul class="cv-contact-list">
                            <li>
                                <i class="fa-solid fa-phone"></i>
                                <span><?= htmlspecialchars($profile['contact']['phone']) ?></span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope"></i>
                                <span><?= htmlspecialchars($profile['contact']['email']) ?></span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span><?= htmlspecialchars($profile['contact']['address']) ?></span>
                            </li>
                        </ul>
                    </div>

                    <div class="cv-sheet-side-section">
                        <h4>Skills</h4>
                        <ul class="cv-skill-bullets">
                            <?php foreach ($profile['skills']['core'] as $coreSkill): ?>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span><?= htmlspecialchars($coreSkill) ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="cv-sheet-right">
                    <div class="cv-sheet-header">
                        <span class="cv-sheet-kicker">CURRICULUM VITAE</span>
                        <h2 id="cvModalTitle"><?= htmlspecialchars($profile['name']) ?></h2>
                        <div class="cv-sheet-role">Digital Designer &amp; Video Editor • <?= htmlspecialchars($profile['role']) ?></div>
                    </div>

                    <div class="cv-sheet-block">
                        <h3><i class="fa-solid fa-graduation-cap"></i> Education</h3>
                        <div class="timeline">
                            <?php foreach ($profile['education'] as $edu): ?>
                                <div class="timeline-item">
                                    <span class="timeline-period">(<?= htmlspecialchars($edu['period']) ?>)</span>
                                    <h4><?= htmlspecialchars($edu['institution']) ?></h4>
                                    <div class="timeline-sub"><?= htmlspecialchars($edu['program']) ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="cv-sheet-block">
                        <h3><i class="fa-solid fa-briefcase"></i> Work Experience</h3>
                        <div class="timeline">
                            <?php foreach ($profile['experience'] as $exp): ?>
                                <div class="timeline-item">
                                    <span class="timeline-period">(<?= htmlspecialchars($exp['period']) ?>)</span>
                                    <h4><?= htmlspecialchars($exp['role']) ?></h4>
                                    <div class="timeline-sub"><?= htmlspecialchars($exp['department']) ?> — <?= htmlspecialchars($exp['company']) ?></div>
                                    <p><?= htmlspecialchars($exp['description']) ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="cv-sheet-block">
                        <h3><i class="fa-solid fa-user-check"></i> Reference</h3>
                        <div class="references-grid">
                            <?php foreach ($profile['references'] as $ref): ?>
                                <div class="ref-card">
                                    <h4><?= htmlspecialchars($ref['name']) ?></h4>
                                    <p><?= htmlspecialchars($ref['title']) ?></p>
                                    <div class="ref-phone">
                                        <i class="fa-solid fa-phone"></i>
                                        <span><?= htmlspecialchars($ref['phone']) ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="cv-sheet-footer-sig">
                        <?= htmlspecialchars($profile['name']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="site-footer">
        <p>
            &copy; <?= date('Y') ?> <strong><?= htmlspecialchars($profile['name']) ?></strong> • BS Information Technology, Palawan State University.
        </p>
    </footer>

    <script>
        window.PORTFOLIO_CATEGORIES = <?= json_encode($categories, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
        window.PORTFOLIO_ITEMS = <?= json_encode($portfolioItems, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?>;
    </script>
    <script src="script.js?v=10"></script>
</body>
</html>
