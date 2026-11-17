document.addEventListener('DOMContentLoaded', () => {
    const categoryMeta = window.PORTFOLIO_CATEGORIES || {};
    const portfolioItems = window.PORTFOLIO_ITEMS || [];

    const animLabels = {
        'anim-all': 'Cascade Glass Rise',
        'anim-cinema': 'Cinema Reel Zoom & Live Preview',
        'anim-browser': '3D Browser Perspective Tilt',
        'anim-editorial': 'Editorial Press Slide',
        'anim-merch': '3D Product Levitation Bounce',
        'anim-envelope': 'Golden Envelope 3D Unfold',
        'anim-banner': 'Wide Banner Unfurl',
        'anim-emblem': 'Vector Emblem Spin-Scale',
        'anim-label': '360° Packaging Cylinder Roll',
        'anim-poster': 'Billboard Pop & Spotlight',
        'anim-thumb': 'YouTube Click-Pop Tilt',
        'anim-brochure': 'Booklet Page-Open 3D Flip',
        'anim-infographic': 'Vertical Scanline Cascade'
    };

    const grid = document.getElementById('portfolioGrid');
    const pills = document.querySelectorAll('.cat-pill');
    const searchInput = document.getElementById('portfolioSearch');
    const activeCatIcon = document.getElementById('activeCatIcon');
    const activeCatName = document.getElementById('activeCatName');
    const activeCatAnimBadge = document.getElementById('activeCatAnimBadge');
    const activeCatDesc = document.getElementById('activeCatDesc');

    let currentCategory = 'all';
    let currentSearch = '';

    function applyFilterAndAnimate(categoryKey, searchQuery = '') {
        currentCategory = categoryKey;
        currentSearch = searchQuery.trim().toLowerCase();

        pills.forEach(pill => {
            pill.classList.toggle('active', pill.dataset.category === currentCategory);
        });

        const meta = categoryMeta[currentCategory] || categoryMeta['all'];
        if (meta && activeCatIcon && activeCatName && activeCatDesc && activeCatAnimBadge) {
            activeCatIcon.innerHTML = `<i class="fa-solid ${meta.icon}"></i>`;
            activeCatName.textContent = meta.name;
            activeCatAnimBadge.textContent = animLabels[meta.anim] || 'Curated Collection';
            activeCatDesc.textContent = meta.desc;
        }

        const cards = Array.from(grid.querySelectorAll('.work-card'));
        let visibleIndex = 0;

        const allAnimClasses = [
            'enter-anim-all', 'enter-anim-cinema', 'enter-anim-browser',
            'enter-anim-editorial', 'enter-anim-merch', 'enter-anim-envelope',
            'enter-anim-banner', 'enter-anim-emblem', 'enter-anim-label',
            'enter-anim-poster', 'enter-anim-thumb', 'enter-anim-brochure',
            'enter-anim-infographic'
        ];

        cards.forEach(card => {
            const cardCat = card.dataset.category || '';
            const cardTags = (card.dataset.tags || '').split(',');
            const titleText = (card.dataset.title || '').toLowerCase();
            const descText = (card.dataset.desc || '').toLowerCase();

            const matchesCategory =
                currentCategory === 'all' ||
                cardCat === currentCategory ||
                cardTags.includes(currentCategory);

            const matchesSearch =
                !currentSearch ||
                titleText.includes(currentSearch) ||
                descText.includes(currentSearch) ||
                cardCat.includes(currentSearch);

            card.classList.remove(...allAnimClasses);

            if (matchesCategory && matchesSearch) {
                card.style.display = 'flex';
                card.style.animationDelay = `${Math.min(visibleIndex * 12, 80)}ms`;
                card.classList.add('enter-anim-all');
                visibleIndex++;
            } else {
                card.style.display = 'none';
            }
        });
    }

    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            const cat = pill.dataset.category;
            applyFilterAndAnimate(cat, searchInput ? searchInput.value : '');
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', e => {
            applyFilterAndAnimate(currentCategory, e.target.value);
        });
    }

    document.querySelectorAll('.service-glass-card[data-jump-category]').forEach(sCard => {
        sCard.addEventListener('click', () => {
            const targetCat = sCard.dataset.jumpCategory;
            const workSection = document.getElementById('work');
            if (workSection) {
                workSection.scrollIntoView({ behavior: 'smooth' });
            }
            setTimeout(() => {
                applyFilterAndAnimate(targetCat, '');
            }, 300);
        });
    });

    document.querySelectorAll('.work-card').forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });

        const previewVid = card.querySelector('video.hover-preview-video');
        if (previewVid) {
            card.addEventListener('mouseenter', () => {
                previewVid.play().catch(() => {});
            });
            card.addEventListener('mouseleave', () => {
                previewVid.pause();
            });
        }
    });

    const lightbox = document.getElementById('lightboxModal');
    const lbStage = document.getElementById('lightboxStage');
    const lbCategory = document.getElementById('lightboxCategory');
    const lbTitle = document.getElementById('lightboxTitle');
    const lbDesc = document.getElementById('lightboxDesc');
    const lbDownload = document.getElementById('lightboxDownload');
    const lbClose = document.getElementById('lightboxClose');
    const lbInquireBtn = document.getElementById('lightboxInquireBtn');

    function encodePath(rawPath) {
        if (!rawPath) return '';
        if (/^https?:\/\
        return rawPath.split('/').map(segment => encodeURIComponent(segment)).join('/');
    }

    function getGoogleDrivePreviewUrl(url) {
        if (!url || !url.includes('drive.google.com')) return null;
        const fileIdMatch = url.match(/\/file\/d\/([a-zA-Z0-9_-]+)/) || url.match(/[?&]id=([a-zA-Z0-9_-]+)/);
        if (fileIdMatch && fileIdMatch[1]) {
            return `https://drive.google.com/file/d/${fileIdMatch[1]}/preview`;
        }
        return url;
    }

    function openLightboxForItem(item) {
        if (!lightbox || !item) return;

        const catInfo = categoryMeta[item.category] || { name: item.category };
        lbCategory.textContent = `${catInfo.name} • ${item.subtitle || ''}`;
        lbTitle.textContent = item.title;
        lbDesc.textContent = item.description;

        const rawVideoUrl = item.drive_url || item.src;
        const drivePreviewUrl = getGoogleDrivePreviewUrl(rawVideoUrl);
        const safeSrc = encodePath(item.src);

        if (lbDownload) {
            lbDownload.href = drivePreviewUrl || safeSrc;
            lbDownload.style.display = 'inline-flex';
        }

        lbStage.innerHTML = '';

        if (item.type === 'video') {
            if (drivePreviewUrl) {
                const iframe = document.createElement('iframe');
                iframe.src = drivePreviewUrl;
                iframe.allow = 'autoplay; fullscreen';
                iframe.allowFullscreen = true;
                iframe.style.width = '100%';
                iframe.style.height = '68vh';
                iframe.style.border = 'none';
                iframe.style.borderRadius = '12px';
                lbStage.appendChild(iframe);
            } else {
                const vid = document.createElement('video');
                vid.src = safeSrc;
                vid.controls = true;
                vid.autoplay = true;
                vid.playsInline = true;
                if (item.poster) {
                    vid.poster = encodePath(item.poster);
                }
                lbStage.appendChild(vid);
            }
        } else if (item.type === 'audio') {
            const wrap = document.createElement('div');
            wrap.style.textAlign = 'center';
            wrap.style.width = '100%';
            wrap.style.padding = '30px';
            if (item.poster) {
                const img = document.createElement('img');
                img.src = encodePath(item.poster);
                img.style.maxHeight = '280px';
                img.style.borderRadius = '14px';
                img.style.marginBottom = '20px';
                wrap.appendChild(img);
            }
            const aud = document.createElement('audio');
            aud.src = safeSrc;
            aud.controls = true;
            aud.autoplay = true;
            aud.style.width = '100%';
            wrap.appendChild(aud);
            lbStage.appendChild(wrap);
        } else if (item.type === 'gallery' && Array.isArray(item.gallery) && item.gallery.length > 0) {
            const mainImg = document.createElement('img');
            mainImg.src = encodePath(item.gallery[0]);
            mainImg.alt = item.title;
            lbStage.appendChild(mainImg);

            const thumbRow = document.createElement('div');
            thumbRow.className = 'gallery-thumbs';

            item.gallery.forEach((gPath, idx) => {
                const tImg = document.createElement('img');
                tImg.src = encodePath(gPath);
                tImg.className = 'gallery-thumb' + (idx === 0 ? ' active' : '');
                tImg.alt = `${item.title} page ${idx + 1}`;
                tImg.addEventListener('click', () => {
                    mainImg.src = encodePath(gPath);
                    if (lbDownload) lbDownload.href = encodePath(gPath);
                    thumbRow.querySelectorAll('.gallery-thumb').forEach(el => el.classList.remove('active'));
                    tImg.classList.add('active');
                });
                thumbRow.appendChild(tImg);
            });

            lbStage.appendChild(thumbRow);
        } else {
            const img = document.createElement('img');
            img.src = safeSrc;
            img.alt = item.title;
            lbStage.appendChild(img);
        }

        if (lbInquireBtn) {
            lbInquireBtn.onclick = () => {
                closeLightbox();
                const serviceSelect = document.getElementById('inquiryService');
                if (serviceSelect && catInfo.name) {
                    Array.from(serviceSelect.options).forEach(opt => {
                        if (opt.value.toLowerCase().includes(catInfo.name.toLowerCase())) {
                            serviceSelect.value = opt.value;
                        }
                    });
                }
                const contactSec = document.getElementById('contact');
                if (contactSec) contactSec.scrollIntoView({ behavior: 'smooth' });
            };
        }

        lightbox.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        if (!lightbox) return;
        lightbox.classList.remove('open');
        lbStage.innerHTML = '';
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.work-card').forEach(card => {
        card.addEventListener('click', () => {
            const id = card.dataset.id;
            const found = portfolioItems.find(it => it.id === id);
            if (found) {
                openLightboxForItem(found);
            }
        });
    });

    const cvModal = document.getElementById('cvModal');
    const cvModalClose = document.getElementById('cvModalClose');

    function openCvModal() {
        if (!cvModal) return;
        cvModal.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeCvModal() {
        if (!cvModal) return;
        cvModal.classList.remove('open');
        document.body.style.overflow = '';
    }

    document.querySelectorAll('.js-open-cv').forEach(btn => {
        btn.addEventListener('click', openCvModal);
    });

    if (cvModalClose) cvModalClose.addEventListener('click', closeCvModal);
    if (cvModal) {
        cvModal.addEventListener('click', e => {
            if (e.target === cvModal) closeCvModal();
        });
    }

    if (lbClose) lbClose.addEventListener('click', closeLightbox);
    if (lightbox) {
        lightbox.addEventListener('click', e => {
            if (e.target === lightbox) closeLightbox();
        });
    }
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') {
            closeLightbox();
            closeCvModal();
        }
    });

    window.addEventListener('scroll', () => {
        if (window.scrollY > window.innerHeight * 0.65) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }, { passive: true });

    const themeToggleBtn = document.getElementById('themeToggleBtn');
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', () => {
            const currentTheme = document.documentElement.getAttribute('data-theme');
            const nextTheme = currentTheme === 'light-amber' ? 'dark' : 'light-amber';
            if (nextTheme === 'light-amber') {
                document.documentElement.setAttribute('data-theme', 'light-amber');
                themeToggleBtn.innerHTML = '<i class="fa-solid fa-moon"></i>';
            } else {
                document.documentElement.removeAttribute('data-theme');
                themeToggleBtn.innerHTML = '<i class="fa-solid fa-sun"></i>';
            }
        });
    }

    const contactForm = document.getElementById('portfolioContactForm');
    const formStatus = document.getElementById('formStatus');

    if (contactForm && formStatus) {
        contactForm.addEventListener('submit', async e => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const origText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fa-solid fa-circle-notch fa-spin"></i> Sending Inquiry...';
            submitBtn.disabled = true;
            formStatus.className = 'form-status';
            formStatus.textContent = '';

            const payload = {
                name: contactForm.name.value.trim(),
                email: contactForm.email.value.trim(),
                service: contactForm.service.value,
                budget: contactForm.budget.value,
                message: contactForm.message.value.trim(),
                _subject: `New Portfolio Inquiry: ${contactForm.service.value} from ${contactForm.name.value.trim()}`,
                _replyto: contactForm.email.value.trim(),
                _template: 'table',
                _captcha: 'false'
            };

            try {
                const res = await fetch('https://formsubmit.co/ajax/snoclue117@gmail.com', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });

                const data = await res.json().catch(() => ({}));
                if (res.ok && (data.success === 'true' || data.success === true)) {
                    formStatus.className = 'form-status success';
                    formStatus.innerHTML = `<i class="fa-solid fa-circle-check"></i> Thank you, ${payload.name}! Your ${payload.service} inquiry has been sent directly to Careen's Gmail.`;
                    contactForm.reset();
                } else if (data.message && data.message.toLowerCase().includes('activation')) {
                    formStatus.className = 'form-status success';
                    formStatus.innerHTML = `<i class="fa-solid fa-envelope-circle-check"></i> Activation email sent to snoclue117@gmail.com! Please check your Gmail (and Spam folder) and click "Activate Form".`;
                } else {
                    throw new Error(data.message || 'Unable to send email right now.');
                }
            } catch (err) {
                formStatus.className = 'form-status error';
                formStatus.innerHTML = `<i class="fa-solid fa-circle-exclamation"></i> Could not send inquiry (${err.message}). Please email directly or try again.`;
            } finally {
                submitBtn.innerHTML = origText;
                submitBtn.disabled = false;
            }
        });
    }
});
