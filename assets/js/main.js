document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { header.classList.add('scrolled'); }
    else { header.classList.remove('scrolled'); }
  });

  const toggleBtn = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (toggleBtn && mainNav) {
    toggleBtn.addEventListener('click', () => {
      const isOpen = mainNav.style.display === 'flex';
      mainNav.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        mainNav.style.flexDirection = 'column'; mainNav.style.position = 'absolute';
        mainNav.style.top = '100%'; mainNav.style.left = '0'; mainNav.style.right = '0';
        mainNav.style.background = 'rgba(16, 10, 5, 0.98)'; mainNav.style.padding = '24px';
      }
    });
  }

  const optionCards = document.querySelectorAll('.amber-option-card');
  const resultTitle = document.getElementById('amber-custom-title');
  const resultDesc = document.getElementById('amber-custom-desc');
  const resultBadge = document.getElementById('amber-custom-badge');

  const amberPurses = {
    'cognacclutch': { title: 'The Royal Cognac Baltic Amber Minaudière', desc: 'Sculpted from a single 40-million-year-old Baltic amber block with hand-saddle stitched Tuscan bridle leather gussets.', badge: 'Gemstone Grade: Natural Baltic Succinite &bull; 24K Gold Clasp' },
    'butterscotchbag': { title: 'The Butterscotch Amber & Saddle Leather Tote', desc: 'Rare opaque butterscotch amber medallion inlays set into full-grain vegetable-tanned chestnut leather.', badge: 'Leather Tannage: Tuscan Chestnut Bark &bull; French Saddle Stitched' },
    'cherryboxpurse': { title: 'The Cherry Amber Geometric Evening Box', desc: 'Deep ruby-cherry Baltic amber facet panels set into solid brass hardware with hand-braided leather crossbody chain.', badge: 'Architecture: Micro-Faceted Amber Panels &bull; Solid Brass Chassis' }
  };

  if (optionCards.length > 0 && resultTitle) {
    optionCards.forEach(card => {
      card.addEventListener('click', () => {
        optionCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        const type = card.getAttribute('data-purse');
        if (amberPurses[type]) {
          resultTitle.textContent = amberPurses[type].title;
          resultDesc.textContent = amberPurses[type].desc;
          if (resultBadge) resultBadge.textContent = amberPurses[type].badge;
        }
      });
    });
  }

  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) { item.classList.add('active'); }
      });
    }
  });
});