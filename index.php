<?php
$site_name = "Amber Purse Fox";
$site_tagline = "Bespoke Baltic Amber Clutches & Luxury Leathergoods";
$official_address = "181 Mercer Street, New York, NY 10012, United States";
$official_phone = "+1-888-777-5845";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amber Purse Fox | Bespoke Baltic Amber Clutches & Luxury Leathergoods</title>
  <meta name="description" content="Discover Amber Purse Fox: handcrafted Baltic amber minaudières, Tuscan vegetable-tanned leather handbags, and French saddle stitching in Manhattan.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%23100A05' stroke='%23F59E0B' stroke-width='4'/><polygon points='50,20 80,75 20,75' fill='%23FBBF24'/><circle cx='50' cy='55' r='8' fill='%23EA580C'/></svg>">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" class="brand-container">
          <div class="brand-logo-icon">🦊</div>
          <div class="brand-text-wrap">
            <span class="brand-logo-text"><?php echo $site_name; ?></span>
            <span class="brand-tagline"><?php echo $site_tagline; ?></span>
          </div>
        </a>
        <nav class="main-nav">
          <a href="index.php" class="nav-link active">Main</a>
          <a href="about.html" class="nav-link">Atelier</a>
          <a href="blog.html" class="nav-link">Journal</a>
          <a href="contact.html" class="nav-link">Amber Salon</a>
        </nav>
        <div class="nav-cta"><a href="contact.html" class="btn-amber btn-gold">Commission Purse</a></div>
        <button class="mobile-toggle" aria-label="Toggle Navigation"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>
  <main>
    <!-- Section 1: Hero Showcase -->
    <section class="hero-amber">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="section-tag">Haute Leathergoods & Gemology</span>
            <h1 class="hero-title">The Luminous Splendor of <span>Fossilized Amber.</span></h1>
            <p class="hero-subtitle">
              Handcrafting bespoke 40-million-year-old Baltic amber minaudières, Tuscan vegetable-tanned saddle leather handbags, and French hand-stitching in Manhattan.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
              <a href="contact.html" class="btn-amber btn-gold">Schedule Bespoke Fitting</a>
              <a href="about.html" class="btn-amber btn-outline">Explore Amber Gemology</a>
            </div>
            <div class="hero-stats">
              <div class="stat-item"><h4>40M Yrs</h4><p>Baltic Pine Resin Fossilization</p></div>
              <div class="stat-item"><h4>100%</h4><p>Hand-Saddle Stitched Linen</p></div>
              <div class="stat-item"><h4>Tuscan</h4><p>Chestnut Vegetable Tannage</p></div>
            </div>
          </div>
          <div class="hero-img-box">
            <img src="assets/images/hero-amber-purse.jpg" alt="Luxury handbag crafted from chestnut saddle leather adorned with natural Baltic amber gemstone inlays">
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Three Pillars of Handbag Craftsmanship -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Atelier Pillars</span>
          <h2>The Architecture of Heirloom Leathercraft</h2>
          <p>Every purse is engineered around genuine fossilized Baltic amber, French saddle stitching, and Tuscan bark-tanned leathers.</p>
        </div>
        <div class="grid-3">
          <div class="amber-card">
            <div class="card-img-wrap"><img src="assets/images/craft-baltic-amber.jpg" alt="Natural raw Baltic amber gemstones showing rich honey and cognac translucence" loading="lazy"><span class="card-tag-pill">Gemstone Rarity</span></div>
            <div class="card-body"><h3>Natural Baltic Succinite</h3><p>Genuine 40-million-year-old fossilized resin containing 8% succinic acid, hand-faceted into luminous minaudière panels.</p><a href="about.html" class="card-link">Explore Amber Gemology &rarr;</a></div>
          </div>
          <div class="amber-card">
            <div class="card-img-wrap"><img src="assets/images/craft-saddle-stitching.jpg" alt="Master leather artisan stitching handbag edges with traditional two-needle French saddle stitch" loading="lazy"><span class="card-tag-pill">Saddle Stitching</span></div>
            <div class="card-body"><h3>Two-Needle Saddle Stitching</h3><p>Traditional hand-stitching with beeswaxed French linen thread, ensuring independent locking loops that never unravel.</p><a href="about.html" class="card-link">Explore Stitching Craft &rarr;</a></div>
          </div>
          <div class="amber-card">
            <div class="card-img-wrap"><img src="assets/images/craft-veg-leather.jpg" alt="Tuscan vegetable tanned full grain leather hides with rich chestnut patina" loading="lazy"><span class="card-tag-pill">Vegetable Tannage</span></div>
            <div class="card-body"><h3>Tuscan Chestnut Leather</h3><p>Full-grain bridle leather tanned over sixty days in Santa Croce with chestnut and mimosa bark extracts for rich patina.</p><a href="about.html" class="card-link">Explore Leather Tannage &rarr;</a></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3: Signature Handbag Collection Portfolio -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Minaudière Catalog</span>
          <h2>The Amber Purse Fox Portfolio</h2>
          <p>Handcrafted in limited annual runs for red carpet galas, opera evenings, and discerning collectors.</p>
        </div>
        <div class="grid-3">
          <div class="amber-card"><div class="card-body"><h3>The Cognac Imperial Minaudière</h3><p>Solid sculpted Baltic amber evening clutch framed with hand-stitched saddle leather and 24K gold-plated lock.</p><a href="contact.html" class="card-link">Commission Bespoke Purse &rarr;</a></div></div>
          <div class="amber-card"><div class="card-body"><h3>The Butterscotch Saddle Day Tote</h3><p>Full-grain chestnut leather structured tote featuring hand-carved opaque butterscotch amber medallion inlays.</p><a href="contact.html" class="card-link">Commission Bespoke Purse &rarr;</a></div></div>
          <div class="amber-card"><div class="card-body"><h3>The Cherry Amber Geometric Box</h3><p>Deep ruby-cherry Baltic amber facet panels set into solid brass chassis with braided leather crossbody strap.</p><a href="contact.html" class="card-link">Commission Bespoke Purse &rarr;</a></div></div>
        </div>
      </div>
    </section>

    <!-- Section 4: Interactive Amber Handbag Configurator -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Interactive Design Studio</span>
          <h2>Configure Your Bespoke Amber Handbag</h2>
          <p>Select your desired Baltic amber gemstone shade, leather tannage colorway, and hardware finishes.</p>
        </div>
        <div class="interactive-amber-tool">
          <div class="amber-selector-grid">
            <div class="amber-option-card active" data-purse="cognacclutch"><h4>Royal Cognac Minaudière</h4><p>Transparent honey cognac amber, 24K gold lock, hand-stitched gussets.</p></div>
            <div class="amber-option-card" data-purse="butterscotchbag"><h4>Butterscotch Saddle Tote</h4><p>Rare opaque yolk amber medallion, Tuscan chestnut leather, brass feet.</p></div>
            <div class="amber-option-card" data-purse="cherryboxpurse"><h4>Cherry Geometric Box</h4><p>Deep ruby-cherry faceted panels, brass chassis, braided strap.</p></div>
          </div>
          <div class="amber-result-box">
            <div>
              <div id="amber-custom-badge" style="color: var(--color-golden-amber); font-weight: 700; font-size: 0.88rem; margin-bottom: 6px;">Gemstone Grade: Natural Baltic Succinite &bull; 24K Gold Clasp</div>
              <h3 id="amber-custom-title" style="margin-bottom: 8px;">The Royal Cognac Baltic Amber Minaudière</h3>
              <p id="amber-custom-desc" style="color: var(--color-text-muted); font-size: 0.95rem;">Sculpted from a single 40-million-year-old Baltic amber block with hand-saddle stitched Tuscan bridle leather gussets.</p>
            </div>
            <a href="contact.html" class="btn-amber btn-gold" style="white-space: nowrap;">Commission This Custom Purse</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 5: The Master Artisan's Manifesto -->
    <section class="section">
      <div class="container">
        <div class="grid-2">
          <div>
            <span class="section-tag">Atelier Manifesto</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">The Master Artisan: Ancient Fossil Resin & Living Leather</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 16px;">
              In a luxury market saturated with mass-produced vinyl coated canvas and synthetic plastic gems, Amber Purse Fox revives the timeless splendor of genuine fossilized Baltic amber and vegetable-tanned bridle leather.
            </p>
            <p style="color: var(--color-text-muted); margin-bottom: 24px;">
              Amber is not cold stone; it is ancient golden sunlight trapped in prehistoric pine resin, warm to the touch and glowing with forty million years of geological history:
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px;">
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-amber); font-size: 1.2rem; margin-bottom: 4px;">💎 8% Succinic Acid</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Authentic Baltic Succinite gemstone grade with deep warm golden refraction.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-amber); font-size: 1.2rem; margin-bottom: 4px;">🪡 Two-Needle Saddle Stitch</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Hand-sewn with beeswaxed French linen thread for indestructible seam integrity.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-amber); font-size: 1.2rem; margin-bottom: 4px;">🍂 Plant Bark Tannage</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Tanned with chestnut and mimosa tannins for rich aroma and golden patina.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-golden-amber); font-size: 1.2rem; margin-bottom: 4px;">🏛️ Manhattan Bespoke Salon</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Handcrafted individually at our SoHo atelier at 181 Mercer Street.</p>
              </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
              <a href="about.html" class="btn-amber btn-gold">Read Atelier Manifesto &rarr;</a>
              <a href="contact.html" class="btn-amber btn-outline">Book Private Salon Fitting</a>
            </div>
          </div>
          <div class="hero-img-box" style="position: relative;">
            <img src="assets/images/about-leather-artisan.jpg" alt="Master leather artisan hand burnishing edges of chestnut saddle leather handbag with bone folder" loading="lazy">
            <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(16, 10, 5, 0.92); backdrop-filter: blur(10px); padding: 14px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
              <span style="font-size: 0.82rem; color: var(--color-honey-amber); font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">Bespoke Leather Atelier</span>
              <span style="font-size: 0.78rem; color: var(--color-text-muted);">Manhattan &bull; 181 Mercer St</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 6: Verified Craftsmanship Benchmarks -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Quality Metrics</span>
          <h2>Handbag Craftsmanship Benchmarks</h2>
          <p>Laboratory validated for tensile seam strength, amber authenticity, and leather patina durability.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-golden-amber); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">2.5 Mohs</div>
            <h4 style="margin-bottom: 12px;">Amber Hardness & Warm Tactility</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Fossilized pine resin that feels warm against the palm, unlike cold glass or inorganic quartz.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-golden-amber); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">8 Stitches</div>
            <h4 style="margin-bottom: 12px;">Per Inch Hand-Saddle Density</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Pricked with French chisels and stitched with Au Chinois beeswaxed linen thread.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-golden-amber); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">60 Days</div>
            <h4 style="margin-bottom: 12px;">Slow Pit Bark Tannage</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Natural tree tannins penetrating deep into the hide fiber core without heavy metal chromium.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 7: Manhattan Amber Salon Lookbook -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Manhattan Fitting Salon</span>
          <h2>The Mercer Street Amber Boudoir</h2>
          <p>Experience private handbag bespoke consultations, leather swatch evaluations, and custom monogramming in SoHo.</p>
        </div>
        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-border); position: relative;">
          <img src="assets/images/lookbook-mercer-salon.jpg" alt="Luxury Manhattan leathergoods showroom with amber handbags displayed on velvet pedestals under warm lighting" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 32px; left: 32px; background: rgba(16, 10, 5, 0.92); backdrop-filter: blur(12px); padding: 24px 32px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); max-width: 500px;">
            <h3 style="font-size: 1.35rem; margin-bottom: 8px; color: var(--color-golden-amber);">The Mercer Amber Salon</h3>
            <p style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 16px;">Private gala clutch consultations, gemstone matching, and bespoke strap length fittings.</p>
            <a href="blog.html" class="card-link">Read Leather Treatises &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 8: Patron & Collector Testimonials -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Patron Reflections</span>
          <h2>Testimonials from Our Handbag Patrons</h2>
          <p>Opera patrons, couture collectors, and luxury fashion directors on Amber Purse Fox.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-golden-amber); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FEF3C7; font-style: italic; margin-bottom: 20px;">"The Baltic cognac amber clutch is an absolute showstopper at the Met Gala. The fossil inclusions glow like liquid fire under evening lights."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Countess Natalie Von Berg</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Art Collector & Patron, Vienna</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-golden-amber); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FEF3C7; font-style: italic; margin-bottom: 20px;">"The two-needle French saddle stitching is completely flawless. The vegetable-tanned leather has developed a deep, buttery chestnut patina over two years."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Gisèle Moreau</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Haute Couture Stylist, Paris</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-golden-amber); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FEF3C7; font-style: italic; margin-bottom: 20px;">"Holding natural amber in your hand is an intoxicating tactile experience. It warms to your skin and radiates pure historical elegance."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Dr. Serena Hayes</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Gemologist & Author, Manhattan</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 9: Private Fitting & Bespoke Purse Inquiries -->
    <section class="section">
      <div class="container container-narrow">
        <div style="background: radial-gradient(circle at center, rgba(245, 158, 11, 0.15), transparent 70%), var(--color-card-bg); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 60px 48px; text-align: center;">
          <span class="section-tag">Bespoke Handbag Commission</span>
          <h2 style="font-size: 2.3rem; margin-bottom: 16px;">Schedule Your Private Leather Consultation</h2>
          <p style="color: var(--color-text-muted); max-width: 560px; margin: 0 auto 32px;">
            Visit our Manhattan atelier at 181 Mercer Street, New York, NY 10012 to select raw Baltic amber specimens, or request our confidential leather lookbook.
          </p>
          <div style="display: flex; gap: 12px; justify-content: center; max-width: 500px; margin: 0 auto 24px; flex-wrap: wrap;">
            <input type="email" placeholder="Enter your patron or client email" style="flex: 1; min-width: 240px; padding: 14px 18px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); background: var(--color-subtle-bg); color: var(--color-text-main); font-size: 0.95rem;">
            <a href="contact.html" class="btn-amber btn-gold">Request Amber Lookbook</a>
          </div>
          <p style="font-size: 0.8rem; color: #9CA3AF;">Direct atelier appointments welcomed at +1-888-777-5845.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand-container" style="margin-bottom: 1.2rem;">
            <div class="brand-logo-icon">🦊</div>
            <div class="brand-text-wrap">
              <span class="brand-logo-text"><?php echo $site_name; ?></span>
              <span class="brand-tagline"><?php echo $site_tagline; ?></span>
            </div>
          </div>
          <p style="font-size: 0.92rem; color: #D1D5DB; line-height: 1.8;">
            Handcrafting bespoke Baltic amber minaudières, Tuscan vegetable-tanned leather handbags, and luxury clutches in Manhattan.
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Main</a></li>
            <li><a href="about.html">Atelier</a></li>
            <li><a href="blog.html">Journal</a></li>
            <li><a href="contact.html">Amber Salon</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Atelier Disclaimer</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Manhattan Atelier</h4>
          <div class="footer-contact-item"><span class="icon">📍</span><span><?php echo $official_address; ?></span></div>
          <div class="footer-contact-item"><span class="icon">📞</span><span><?php echo $official_phone; ?></span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All Rights Reserved.</div>
        <div>Baltic Amber Gemology &bull; French Saddle Stitch &bull; Tuscan Vegetable Tannage</div>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>
</html>