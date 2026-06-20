<?php
/**
 * Template Name: Editorial Policy
 */

// Pull all customizer values
$ep_eyebrow         = get_theme_mod( 'hba_ep_eyebrow',       '⚕ Editorial Standards' );
$ep_hero_title      = get_theme_mod( 'hba_ep_hero_title',    'Our Editorial Policy' );
$ep_hero_lede       = get_theme_mod( 'hba_ep_hero_lede',     'Health Beyond Age exists to help people make informed decisions about their health. That only works if you can trust what you read here. This page explains exactly how our content gets made — from research to fact-checking to medical review — so you always know what\'s behind the advice.' );
$ep_last_updated    = get_theme_mod( 'hba_ep_last_updated',  '📅 Last updated: June 2026' );
$ep_review_freq     = get_theme_mod( 'hba_ep_review_freq',   '🔄 Reviewed annually, or sooner if guidelines change' );
$ep_commit_p1       = get_theme_mod( 'hba_ep_commitment_p1', 'Every article published on Health Beyond Age is written or reviewed by someone with relevant clinical training, lived professional expertise, or a research background in the topic at hand. We are not a content farm repackaging other websites — every piece starts from primary sources and clinical guidelines, and is shaped by people who understand the subject matter firsthand.' );
$ep_commit_p2       = get_theme_mod( 'hba_ep_commitment_p2', "We accept that health information evolves. Where the science shifts, we update our articles to reflect it. Where something is uncertain or debated, we say so rather than presenting a single confident answer that doesn't exist yet." );
$ep_card1_num       = get_theme_mod( 'hba_ep_card1_num',     '01' );
$ep_card1_title     = get_theme_mod( 'hba_ep_card1_title',   'Expert-led' );
$ep_card1_text      = get_theme_mod( 'hba_ep_card1_text',    'Every article is written or reviewed by a credentialed health professional.' );
$ep_card2_num       = get_theme_mod( 'hba_ep_card2_num',     '02' );
$ep_card2_title     = get_theme_mod( 'hba_ep_card2_title',   'Source-first' );
$ep_card2_text      = get_theme_mod( 'hba_ep_card2_text',    'Claims are built on peer-reviewed research and recognized clinical guidelines.' );
$ep_card3_num       = get_theme_mod( 'hba_ep_card3_num',     '03' );
$ep_card3_title     = get_theme_mod( 'hba_ep_card3_title',   'Independently reviewed' );
$ep_card3_text      = get_theme_mod( 'hba_ep_card3_text',    'No article publishes without a medical reviewer checking it for accuracy.' );
$ep_card4_num       = get_theme_mod( 'hba_ep_card4_num',     '04' );
$ep_card4_title     = get_theme_mod( 'hba_ep_card4_title',   'Kept current' );
$ep_card4_text      = get_theme_mod( 'hba_ep_card4_text',    'Content is revisited at least annually and updated as guidance changes.' );
$ep_callout_title   = get_theme_mod( 'hba_ep_callout_title', "What we won't publish" );
$ep_callout_text    = get_theme_mod( 'hba_ep_callout_text',  "We don't publish unverified claims, anecdotal \"cures,\" exaggerated supplement or product benefits, or advice that contradicts established medical guidance. If a topic is genuinely unsettled in the research, our articles reflect that uncertainty rather than picking a side for the sake of a confident headline." );
$ep_reviewer_name   = get_theme_mod( 'hba_ep_reviewer_name', 'Dr. Sarah Matheson, MBChB, MRCGP' );
$ep_reviewer_role   = get_theme_mod( 'hba_ep_reviewer_role', 'Lead Medical Reviewer · Internal Medicine, Preventive Health & Healthy Aging' );
$ep_reviewer_img    = get_theme_mod( 'hba_ep_reviewer_img',  'http://healthbeyondage.com/wp-content/uploads/2026/06/WhatsApp-Image-2026-06-10-at-12.55.05-PM.jpeg' );
$ep_sb_rev_name     = get_theme_mod( 'hba_ep_sidebar_reviewer_name', 'Dr. Sarah Matheson' );
$ep_sb_rev_role     = get_theme_mod( 'hba_ep_sidebar_reviewer_role', 'Lead Medical Reviewer' );
$ep_sb_rev_bio      = get_theme_mod( 'hba_ep_sidebar_reviewer_bio',  'Board-certified in internal medicine, with 18 years overseeing medical review at Health Beyond Age.' );
$ep_sb_rev_img      = get_theme_mod( 'hba_ep_sidebar_reviewer_img',  'http://healthbeyondage.com/wp-content/uploads/2026/06/WhatsApp-Image-2026-06-10-at-12.55.05-PM.jpeg' );
$ep_contact_title   = get_theme_mod( 'hba_ep_contact_title', 'Questions About Our Editorial Process?' );
$ep_contact_text    = get_theme_mod( 'hba_ep_contact_text',  "We're glad to explain how a specific article was researched or reviewed, or to hear about a correction you think we should make." );
$ep_contact_btn     = get_theme_mod( 'hba_ep_contact_btn',   'Contact Our Editorial Team' );
$ep_nl_title        = get_theme_mod( 'hba_ep_nl_title',      '✦ Stay Ahead of Your Health' );
$ep_nl_text         = get_theme_mod( 'hba_ep_nl_text',       'Expert-curated wellness insights, delivered every Friday. No noise, no spam.' );
$ep_stat1           = get_theme_mod( 'hba_ep_stat1',         '5 Health Categories' );
$ep_stat2           = get_theme_mod( 'hba_ep_stat2',         '100% Medically Reviewed' );
$ep_stat3           = get_theme_mod( 'hba_ep_stat3',         'Since 2021 Publishing' );
get_header(); ?>
<style>
  .ep-wrapper {
    --ink:#1b2430;
    --muted:#5b6675;
    --line:#e7e3d9;
    --bg-soft:#f7f5ef;
    --accent:#2f6f5e;
    --accent-dark:#234f43;
    --accent-soft:#e7f0ec;
    --card-bg:#ffffff;
    --radius:14px;
    --maxw:1180px;
    font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
    color:var(--ink);
    line-height:1.65;
    -webkit-font-smoothing:antialiased;
    background:#fff;
  }
  .ep-wrapper * { box-sizing:border-box; }
  .ep-wrapper a { color:inherit; text-decoration:none; }
  .ep-wrapper img { max-width:100%; display:block; }

  .ep-breadcrumb-strip{background:var(--bg-soft);border-bottom:1px solid var(--line);}
  .ep-breadcrumb-wrap{max-width:var(--maxw);margin:0 auto;padding:12px 24px;font-size:13.5px;color:var(--muted);}
  .ep-breadcrumb-wrap a:hover{color:var(--accent);}

  .ep-page-wrap{max-width:var(--maxw);margin:0 auto;padding:0 24px 64px;display:grid;grid-template-columns:1fr 320px;gap:48px;padding-top:30px;}
  @media(max-width:980px){.ep-page-wrap{grid-template-columns:1fr;}}
  .ep-main-col{min-width:0;}

  .ep-policy-hero{padding:14px 0 30px;border-bottom:1px solid var(--line);margin-bottom:38px;}
  .ep-eyebrow{display:inline-flex;align-items:center;gap:8px;font-size:12.5px;font-weight:700;letter-spacing:0.06em;text-transform:uppercase;color:var(--accent);background:var(--accent-soft);padding:6px 14px;border-radius:999px;margin-bottom:18px;}
  .ep-policy-hero h1{font-size:clamp(28px,4vw,38px);line-height:1.15;margin:0 0 14px;letter-spacing:-0.01em;}
  .ep-policy-hero p.ep-lede{font-size:17.5px;color:var(--muted);max-width:600px;margin:0 0 20px;}
  .ep-meta-row{display:flex;flex-wrap:wrap;gap:18px;font-size:13.5px;color:var(--muted);}
  .ep-meta-row span{display:inline-flex;align-items:center;gap:6px;}

  .ep-section{margin:42px 0;}
  .ep-section h2{font-size:22px;margin:0 0 8px;letter-spacing:-0.01em;}
  .ep-section .ep-section-sub{color:var(--muted);font-size:14.5px;margin:0 0 20px;}
  .ep-section p{margin:0 0 16px;font-size:15.5px;}

  .ep-card-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(210px,1fr));gap:14px;margin:20px 0;}
  .ep-pcard{background:var(--bg-soft);border:1px solid var(--line);border-radius:var(--radius);padding:18px 18px 16px;}
  .ep-pcard .ep-pcard-num{font-size:11.5px;font-weight:700;color:var(--accent);letter-spacing:0.05em;margin-bottom:8px;display:block;}
  .ep-pcard h3{font-size:15.5px;margin:0 0 8px;}
  .ep-pcard p{font-size:14px;color:var(--muted);margin:0;}

  .ep-steps{border-left:2px solid var(--line);margin:22px 0 22px 6px;padding-left:26px;}
  .ep-step{position:relative;padding-bottom:26px;}
  .ep-step:last-child{padding-bottom:0;}
  .ep-step::before{content:"";position:absolute;left:-33px;top:2px;width:14px;height:14px;border-radius:50%;background:var(--accent);border:3px solid #fff;box-shadow:0 0 0 1px var(--line);}
  .ep-step h3{font-size:16px;margin:0 0 6px;}
  .ep-step p{font-size:14.5px;color:var(--muted);margin:0;}

  .ep-table-wrap{overflow-x:auto;margin:18px 0;border:1px solid var(--line);border-radius:var(--radius);}
  table.ep-policy-table{width:100%;border-collapse:collapse;font-size:14px;}
  table.ep-policy-table th,table.ep-policy-table td{text-align:left;padding:12px 14px;border-bottom:1px solid var(--line);vertical-align:top;}
  table.ep-policy-table tr:last-child td{border-bottom:none;}
  table.ep-policy-table th{background:var(--bg-soft);font-weight:600;font-size:12.5px;text-transform:uppercase;letter-spacing:0.03em;color:var(--muted);}

  .ep-source-list{list-style:none;margin:16px 0;padding:0;display:grid;gap:9px;}
  .ep-source-list li{display:flex;gap:12px;align-items:flex-start;font-size:14.5px;background:#fff;border:1px solid var(--line);border-radius:10px;padding:11px 14px;}
  .ep-source-tag{flex:none;font-size:10.5px;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;color:var(--accent);background:var(--accent-soft);border-radius:6px;padding:3px 8px;margin-top:1px;}

  .ep-callout{background:var(--accent-soft);border:1px solid #cfe3da;border-radius:var(--radius);padding:20px 22px;margin:22px 0;}
  .ep-callout h3{margin:0 0 8px;font-size:15.5px;}
  .ep-callout p{margin:0;font-size:14.5px;}

  .ep-reviewer-row{display:flex;align-items:center;gap:14px;margin-top:14px;}
  .ep-reviewer-row img{width:50px;height:50px;border-radius:50%;object-fit:cover;flex:none;display:block;background:var(--accent-soft);overflow:hidden;}
  .ep-reviewer-row .ep-rname{font-weight:600;font-size:14px;}
  .ep-reviewer-row .ep-rrole{font-size:12.5px;color:var(--muted);}

  ul.ep-plain{margin:0 0 16px;padding-left:20px;}
  ul.ep-plain li{margin-bottom:8px;font-size:14.5px;}

  .ep-faq-item{border:1px solid var(--line);border-radius:10px;padding:15px 17px;margin-bottom:11px;}
  .ep-faq-item h3{font-size:15px;margin:0 0 6px;}
  .ep-faq-item p{font-size:14px;color:var(--muted);margin:0;}

  .ep-contact-box{text-align:center;border:1px solid var(--line);border-radius:var(--radius);padding:34px 24px;margin-top:46px;background:linear-gradient(180deg,var(--bg-soft),#fff);}
  .ep-contact-box h2{margin:0 0 10px;font-size:21px;}
  .ep-contact-box p{color:var(--muted);margin:0 0 18px;font-size:14.5px;}
  .ep-btn-fill{display:inline-block;background:var(--accent);color:#fff!important;font-weight:600;font-size:14.5px;padding:11px 24px;border-radius:999px;}
  .ep-btn-fill:hover{background:var(--accent-dark);}

  .ep-sidebar{display:flex;flex-direction:column;gap:30px;padding-top:6px;}
  .ep-widget-title{display:flex;align-items:center;gap:7px;font-size:14px;font-weight:700;text-transform:uppercase;letter-spacing:0.04em;color:var(--ink);margin:0 0 16px;}
  .ep-widget-title .ep-dot{width:7px;height:7px;border-radius:50%;background:var(--accent);}

  .ep-trend-item{display:flex;gap:12px;padding:11px 0;border-bottom:1px solid var(--line);}
  .ep-trend-item:last-child{border-bottom:none;padding-bottom:0;}
  .ep-trend-rank{flex:none;width:24px;height:24px;border-radius:50%;background:var(--bg-soft);color:var(--accent);font-size:12px;font-weight:700;display:flex;align-items:center;justify-content:center;}
  .ep-trend-meta{font-size:11px;color:var(--accent);font-weight:600;text-transform:uppercase;letter-spacing:0.03em;margin-bottom:3px;}
  .ep-trend-title{font-size:13.5px;font-weight:500;line-height:1.4;color:var(--ink);}
  .ep-trend-title:hover{color:var(--accent);}
  .ep-trend-sub{font-size:11.5px;color:var(--muted);margin-top:3px;}

  .ep-topic-pills{display:flex;flex-wrap:wrap;gap:8px;}
  .ep-topic-pills a{font-size:13px;font-weight:500;border:1px solid var(--line);border-radius:999px;padding:7px 13px;color:var(--ink);}
  .ep-topic-pills a:hover{border-color:var(--accent);color:var(--accent);background:var(--accent-soft);}

  .ep-story-item{display:flex;gap:10px;align-items:flex-start;padding:10px 0;border-bottom:1px solid var(--line);}
  .ep-story-item:last-child{border-bottom:none;padding-bottom:0;}
  .ep-story-thumb{width:56px;height:56px;border-radius:9px;object-fit:cover;flex:none;background:var(--bg-soft);display:block;}
  .ep-story-cat{font-size:10.5px;color:var(--accent);font-weight:700;text-transform:uppercase;letter-spacing:0.03em;margin-bottom:2px;}
  .ep-story-title{font-size:13px;font-weight:500;line-height:1.35;}
  .ep-story-title:hover{color:var(--accent);}

  .ep-sidebar-card{background:var(--bg-soft);border:1px solid var(--line);border-radius:var(--radius);padding:20px;}
  .ep-sidebar-card.ep-reviewer-card{text-align:center;}
  .ep-sidebar-card.ep-reviewer-card img{width:64px;height:64px;border-radius:50%;object-fit:cover;margin:0 auto 12px;display:block;background:var(--accent-soft);overflow:hidden;}
  .ep-sidebar-card.ep-reviewer-card h4{font-size:15px;margin:0 0 4px;}
  .ep-sidebar-card.ep-reviewer-card .ep-role{font-size:12px;color:var(--accent);font-weight:600;margin-bottom:10px;}
  .ep-sidebar-card.ep-reviewer-card p{font-size:12.5px;color:var(--muted);margin:0 0 14px;}
  .ep-sidebar-card.ep-reviewer-card a{font-size:12.5px;font-weight:600;color:var(--accent);}

  .ep-newsletter-card{background:var(--accent-dark);border-radius:var(--radius);padding:24px 20px;color:#fff;}
  .ep-newsletter-card h4{margin:0 0 8px;font-size:15.5px;}
  .ep-newsletter-card p{font-size:12.5px;color:#cfe3da;margin:0 0 14px;}
  .ep-newsletter-card .ep-btn-fill{background:#fff;color:var(--accent-dark)!important;width:100%;text-align:center;display:block;}
  .ep-newsletter-card .ep-btn-fill:hover{background:#f1f1f1;}
  @media(max-width:980px){.ep-sidebar{flex-direction:row;flex-wrap:wrap;}.ep-widget{flex:1 1 280px;}}
</style>

<div class="ep-wrapper">

<div class="ep-breadcrumb-strip">
  <div class="ep-breadcrumb-wrap">
    <a href="<?php echo esc_url(home_url('/')); ?>">Home</a> &nbsp;/&nbsp; Editorial Policy
  </div>
</div>

<div class="ep-page-wrap">

  <main class="ep-main-col">

    <div class="ep-policy-hero">
      <span class="ep-eyebrow"><?php echo esc_html($ep_eyebrow); ?></span>
      <h1><?php echo esc_html($ep_hero_title); ?></h1>
      <p class="ep-lede"><?php echo esc_html($ep_hero_lede); ?></p>
      <div class="ep-meta-row">
        <span><?php echo esc_html($ep_last_updated); ?></span>
        <span><?php echo esc_html($ep_review_freq); ?></span>
      </div>
    </div>

    <!-- COMMITMENT -->
    <div class="ep-section">
      <h2>Our Commitment to You</h2>
      <p><?php echo esc_html($ep_commit_p1); ?></p>
      <p><?php echo esc_html($ep_commit_p2); ?></p>
      <div class="ep-card-grid">
        <div class="ep-pcard"><span class="ep-pcard-num"><?php echo esc_html($ep_card1_num); ?></span><h3><?php echo esc_html($ep_card1_title); ?></h3><p><?php echo esc_html($ep_card1_text); ?></p></div>
        <div class="ep-pcard"><span class="ep-pcard-num"><?php echo esc_html($ep_card2_num); ?></span><h3><?php echo esc_html($ep_card2_title); ?></h3><p><?php echo esc_html($ep_card2_text); ?></p></div>
        <div class="ep-pcard"><span class="ep-pcard-num"><?php echo esc_html($ep_card3_num); ?></span><h3><?php echo esc_html($ep_card3_title); ?></h3><p><?php echo esc_html($ep_card3_text); ?></p></div>
        <div class="ep-pcard"><span class="ep-pcard-num"><?php echo esc_html($ep_card4_num); ?></span><h3><?php echo esc_html($ep_card4_title); ?></h3><p><?php echo esc_html($ep_card4_text); ?></p></div>
      </div>
    </div>

    <!-- RESEARCH -->
    <div class="ep-section">
      <h2>How We Research Our Content</h2>
      <p class="ep-section-sub">What happens before a single word gets written</p>
      <p>Topics are chosen because they're genuinely useful — common questions our readers ask, conditions that affect people as they age, or areas where misinformation tends to spread. From there, every article follows the same research backbone:</p>
      <div class="ep-steps">
        <div class="ep-step"><h3>Start with primary literature</h3><p>Writers begin with peer-reviewed studies, systematic reviews, and meta-analyses rather than secondary blog summaries. If a claim can be traced to a single study, we note its limitations rather than treating it as settled fact.</p></div>
        <div class="ep-step"><h3>Cross-check against clinical guidelines</h3><p>We compare findings against guidance from major health authorities and medical associations relevant to the topic — for example, cardiology guidance for heart health content, or endocrinology guidance for diabetes content.</p></div>
        <div class="ep-step"><h3>Apply professional, hands-on expertise</h3><p>Many of our writers are practicing clinicians, registered dietitians, or certified specialists in their field. They bring real-world clinical context that a literature review alone can't provide.</p></div>
        <div class="ep-step"><h3>Write for clarity, not just accuracy</h3><p>Being correct isn't enough if no one can use the information. Drafts are written in plain language, with technical terms explained, so the guidance is genuinely actionable.</p></div>
      </div>
    </div>

    <!-- FACT-CHECKING -->
    <div class="ep-section">
      <h2>Our Fact-Checking Process</h2>
      <p class="ep-section-sub">Nothing publishes on a single person's word</p>
      <p>Every factual claim — statistics, study findings, drug or supplement interactions, symptom descriptions, treatment recommendations — is checked against its original source before publication. Our fact-checking process includes:</p>
      <div class="ep-table-wrap">
        <table class="ep-policy-table">
          <thead><tr><th>Check</th><th>What it covers</th></tr></thead>
          <tbody>
            <tr><td>Source verification</td><td>Every statistic or study citation is traced back to its original publication, not a secondhand summary.</td></tr>
            <tr><td>Currency check</td><td>We confirm cited research and guidelines are still current, not superseded by more recent findings.</td></tr>
            <tr><td>Context check</td><td>We confirm a study's population, sample size, and limitations are represented accurately — not overstated for effect.</td></tr>
            <tr><td>Internal consistency</td><td>Claims are checked against other published Health Beyond Age content to avoid contradicting guidance elsewhere on the site.</td></tr>
            <tr><td>Medical accuracy</td><td>A qualified reviewer independently confirms the clinical content is correct and appropriately cautious (see below).</td></tr>
          </tbody>
        </table>
      </div>
      <div class="ep-callout">
        <h3><?php echo esc_html($ep_callout_title); ?></h3>
        <p><?php echo esc_html($ep_callout_text); ?></p>
      </div>
    </div>

    <!-- SOURCES -->
    <div class="ep-section">
      <h2>The Sources We Use</h2>
      <p class="ep-section-sub">Where our information actually comes from</p>
      <p>We prioritize primary and authoritative sources over secondary reporting. Depending on the topic, our writers and reviewers draw on:</p>
      <ul class="ep-source-list">
        <li><span class="ep-source-tag">Research</span> Peer-reviewed journals indexed in databases such as PubMed, Cochrane Library, and major specialty journals (e.g. JAMA, The Lancet, Diabetes Care)</li>
        <li><span class="ep-source-tag">Guidelines</span> Clinical practice guidelines from recognized medical bodies and specialty associations relevant to each topic (cardiology, endocrinology, dermatology, psychiatry, and so on)</li>
        <li><span class="ep-source-tag">Public Health</span> Data and guidance from national and international public health agencies</li>
        <li><span class="ep-source-tag">Clinical Expertise</span> Direct input from our physicians, registered dietitians, and certified specialists, drawn from their own practice</li>
        <li><span class="ep-source-tag">Reference Texts</span> Established clinical reference resources used in medical and allied health education</li>
      </ul>
      <p>We do not rely on user-generated content, unverified forum posts, manufacturer marketing claims, or other blogs as primary sources. Where we reference another publication's reporting for context, we link to it transparently and never present it as original research.</p>
    </div>

    <!-- MEDICAL REVIEW -->
    <div class="ep-section">
      <h2>Our Medical Review Process</h2>
      <p class="ep-section-sub">The final check before anything goes live</p>
      <p>All health and medical content on this site is reviewed by a qualified professional before publication — separate from the person who wrote it. This separation matters: it means every article gets an independent second opinion from someone with the clinical background to catch errors a writer might miss.</p>
      <div class="ep-reviewer-row">
        <img src="<?php echo esc_url($ep_reviewer_img); ?>" alt="<?php echo esc_attr($ep_reviewer_name); ?>">
        <div>
          <div class="ep-rname"><?php echo esc_html($ep_reviewer_name); ?></div>
          <div class="ep-rrole"><?php echo esc_html($ep_reviewer_role); ?></div>
        </div>
      </div>
      <p style="margin-top:20px;">Our review team also includes physicians and specialists who review content within their own area of expertise — for example, our dermatology content is reviewed by a board-certified dermatologist, and our nutrition content is reviewed by a registered dietitian or physician with nutrition expertise. You can see our full reviewer team, credentials, and specialties on our <a href="<?php echo esc_url(home_url('/team')); ?>" style="color:var(--accent);font-weight:600;">Meet the Team</a> page.</p>
      <p>A medical review checks that an article:</p>
      <ul class="ep-plain">
        <li>States clinical information accurately and without exaggeration</li>
        <li>Reflects current, mainstream medical consensus, not a fringe or outdated view</li>
        <li>Includes appropriate caution around symptoms, treatments, or supplements that warrant a doctor's involvement</li>
        <li>Doesn't omit risks, side effects, or contraindications relevant to the topic</li>
      </ul>
      <p>Articles that pass review carry a <strong>"Medically Reviewed"</strong> label along with the reviewer's name, visible on the article itself.</p>
    </div>

    <!-- UPDATES -->
    <div class="ep-section">
      <h2>Updates and Corrections</h2>
      <p>Medical understanding changes, and so does our content. Articles are scheduled for re-review at least once a year, and sooner if relevant clinical guidelines are updated or new research meaningfully changes the picture. When we make a substantive update to an article's medical content, we note the revised date on the page.</p>
      <p>If you believe something we've published is inaccurate or out of date, we want to know. Every correction request is reviewed by a member of our medical team before any change is made, and where a correction is warranted, we make it promptly.</p>
    </div>

    <!-- WHAT THIS SITE IS / ISN'T -->
    <div class="ep-section">
      <h2>What This Site Is — and Isn't</h2>
      <div class="ep-faq-item">
        <h3>This is educational content, not personal medical advice</h3>
        <p>Our articles are written to inform, not to diagnose or treat any individual. They can't account for your specific medical history, medications, or circumstances. Always talk to a qualified healthcare provider about your own health decisions. See our <a href="<?php echo esc_url(home_url('/medical-disclaimer')); ?>" style="color:var(--accent);font-weight:600;">Medical Disclaimer</a> for full details.</p>
      </div>
      <div class="ep-faq-item">
        <h3>Advertising never influences editorial content</h3>
        <p>Health Beyond Age may earn revenue through advertising or affiliate partnerships. These relationships never determine what we write about or what conclusions an article reaches. Our writers and medical reviewers do not receive payment from product or supplement companies in exchange for favorable coverage.</p>
      </div>
      <div class="ep-faq-item">
        <h3>Sponsored content is always labeled</h3>
        <p>In the rare case we publish sponsored content, it is clearly labeled as such and still subject to the same factual accuracy standards as the rest of the site.</p>
      </div>
    </div>

    <div class="ep-contact-box">
      <h2><?php echo esc_html($ep_contact_title); ?></h2>
      <p><?php echo esc_html($ep_contact_text); ?></p>
      <a class="ep-btn-fill" href="<?php echo esc_url(home_url('/contact')); ?>"><?php echo esc_html($ep_contact_btn); ?></a>
    </div>

  </main>

  <aside class="ep-sidebar">

    <!-- Trending -->
    <div class="ep-widget">
      <div class="ep-widget-title"><span class="ep-dot"></span> 🔥 Trending Articles</div>
      <div>
        <?php
        $ep_trending = new WP_Query(['posts_per_page'=>5,'orderby'=>'comment_count','order'=>'DESC','post_status'=>'publish']);
        $ep_rank = 1;
        if($ep_trending->have_posts()): while($ep_trending->have_posts()): $ep_trending->the_post();
          $tc = get_the_category(); $tc_name = !empty($tc)?$tc[0]->name:'Health';
        ?>
        <div class="ep-trend-item">
          <div class="ep-trend-rank"><?php echo $ep_rank++; ?></div>
          <div>
            <div class="ep-trend-meta"><?php echo esc_html($tc_name); ?></div>
            <a class="ep-trend-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="ep-trend-sub"><?php echo function_exists('hba_reading_time')?esc_html(hba_reading_time(get_the_ID())):'5 min read'; ?></div>
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>

    <!-- Browse by Topic -->
    <div class="ep-widget">
      <div class="ep-widget-title"><span class="ep-dot"></span> Browse by Topic</div>
      <div class="ep-topic-pills">
        <?php foreach(get_categories(['hide_empty'=>true,'number'=>15]) as $tc): ?>
        <a href="<?php echo esc_url(get_category_link($tc->term_id)); ?>"><?php echo esc_html($tc->name); ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Top Stories -->
    <div class="ep-widget">
      <div class="ep-widget-title"><span class="ep-dot"></span> 📖 Top Stories</div>
      <div>
        <?php
        $ep_top = new WP_Query(['posts_per_page'=>4,'orderby'=>'date','order'=>'DESC','post_status'=>'publish']);
        if($ep_top->have_posts()): while($ep_top->have_posts()): $ep_top->the_post();
          $sc=get_the_category(); $sc_name=!empty($sc)?$sc[0]->name:'Health';
          $sthumb=get_the_post_thumbnail_url(get_the_ID(),'thumbnail');
        ?>
        <div class="ep-story-item">
          <img class="ep-story-thumb" src="<?php echo $sthumb?esc_url($sthumb):'https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=100&q=80'; ?>" alt="">
          <div>
            <div class="ep-story-cat"><?php echo esc_html($sc_name); ?></div>
            <a class="ep-story-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
      </div>
    </div>

    <!-- Reviewer Card -->
    <div class="ep-widget">
      <div class="ep-sidebar-card ep-reviewer-card">
        <img src="<?php echo esc_url($ep_sb_rev_img); ?>" alt="<?php echo esc_attr($ep_sb_rev_name); ?>">
        <h4><?php echo esc_html($ep_sb_rev_name); ?></h4>
        <div class="ep-role"><?php echo esc_html($ep_sb_rev_role); ?></div>
        <p><?php echo esc_html($ep_sb_rev_bio); ?></p>
        <a href="<?php echo esc_url(home_url('/team')); ?>">View Full Profile →</a>
      </div>
    </div>

    <!-- Newsletter -->
    <div class="ep-widget">
      <div class="ep-newsletter-card">
        <h4><?php echo esc_html($ep_nl_title); ?></h4>
        <p><?php echo esc_html($ep_nl_text); ?></p>
        <a class="ep-btn-fill" href="<?php echo esc_url(home_url('/#subscribe')); ?>">Subscribe Free</a>
      </div>
    </div>

  </aside>

</div> <!-- End ep-page-wrap -->

</div> <!-- End ep-wrapper -->

<?php get_footer(); ?>
