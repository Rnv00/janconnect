<?php
$pageTitle = 'JanConnect | Your civic services, simplified';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
  <section class="hero-section">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-7">
          <p class="eyebrow"><span></span> One place for your city</p>
          <h1>Your city, <em>within reach.</em></h1>
          <p class="hero-copy">Report a concern, find public services, request urgent assistance, and follow every update — without the runaround.</p>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a class="btn btn-marigold btn-lg" href="complaints/create.php">Raise a complaint <span aria-hidden="true">→</span></a>
            <a class="btn btn-outline-light btn-lg" href="track.php">Track a request</a>
          </div>
          <div class="hero-trust d-flex flex-wrap gap-4 mt-5" aria-label="Portal highlights">
            <div><strong>24/7</strong><span>access to help</span></div>
            <div><strong>One ID</strong><span>for every request</span></div>
            <div><strong>Clear</strong><span>status updates</span></div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="hero-panel">
            <div class="panel-orbit orbit-one"></div><div class="panel-orbit orbit-two"></div>
            <p class="panel-label">MAKE A DIFFERENCE</p>
            <h2>What do you need today?</h2>
            <div class="quick-action-list">
              <a href="complaints/create.php"><span class="action-icon icon-complaint">⌁</span><span><strong>Report an issue</strong><small>Roads, waste, water & more</small></span><b aria-hidden="true">→</b></a>
              <a href="sos.php"><span class="action-icon icon-sos">!</span><span><strong>Request SOS help</strong><small>Get urgent civic assistance</small></span><b aria-hidden="true">→</b></a>
              <a href="services.php"><span class="action-icon icon-services">⌘</span><span><strong>Explore services</strong><small>Certificates, permits & updates</small></span><b aria-hidden="true">→</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="action-strip" aria-label="Quick actions">
    <div class="container"><div class="row g-0">
      <div class="col-md-4"><a href="complaints/create.php"><span class="strip-number">01</span><span><strong>Raise a complaint</strong><small>Tell us what needs attention</small></span><b>→</b></a></div>
      <div class="col-md-4"><a href="sos.php"><span class="strip-number sos-number">02</span><span><strong>Send an SOS</strong><small>For urgent civic support</small></span><b>→</b></a></div>
      <div class="col-md-4"><a href="track.php"><span class="strip-number green-number">03</span><span><strong>Track a request</strong><small>See progress in real time</small></span><b>→</b></a></div>
    </div></div>
  </section>

  <section class="services-section section-space" id="services">
    <div class="container">
      <div class="section-heading d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3">
        <div><p class="eyebrow text-aubergine"><span></span> Designed around you</p><h2>Everyday services, made easier.</h2></div>
        <a class="text-link" href="services.php">Browse all services <span>→</span></a>
      </div>
      <div class="row g-4 mt-2">
        <div class="col-md-4"><article class="service-card"><span class="service-icon complaint-bg">⌁</span><p class="card-kicker">BE HEARD</p><h3>Complaints</h3><p>Report civic issues in minutes, attach details, and receive a reference number to follow it through.</p><a href="complaints/create.php">Raise an issue <span>→</span></a></article></div>
        <div class="col-md-4"><article class="service-card sos-card"><span class="service-icon sos-bg">!</span><p class="card-kicker">WHEN IT MATTERS</p><h3>SOS assistance</h3><p>Send a location-aware request for urgent civic help when an everyday problem cannot wait.</p><a href="sos.php">Open SOS <span>→</span></a></article></div>
        <div class="col-md-4"><article class="service-card"><span class="service-icon tracking-bg">⌘</span><p class="card-kicker">STAY INFORMED</p><h3>Request tracking</h3><p>Use your reference number to see where your request is and what happens next.</p><a href="track.php">Track a request <span>→</span></a></article></div>
      </div>
    </div>
  </section>

  <section class="how-section section-space">
    <div class="container"><div class="row align-items-center g-5">
      <div class="col-lg-5"><p class="eyebrow text-aubergine"><span></span> Simple by design</p><h2>From issue to update in three clear steps.</h2><p class="lead-copy">You should not need a map through King's Landing—or Hogwarts—to get a simple civic request sorted.</p><a class="btn btn-aubergine mt-2" href="help.php">See how it works</a></div>
      <div class="col-lg-7"><ol class="steps-list list-unstyled mb-0"><li><span>1</span><div><h3>Tell us what you need</h3><p>Choose a service and share the essential details.</p></div></li><li><span>2</span><div><h3>We route it to the right team</h3><p>Your request is assigned to the department that can help.</p></div></li><li><span>3</span><div><h3>Follow each update</h3><p>Use your request ID to see progress and resolution.</p></div></li></ol></div>
    </div></div>
  </section>

  <section class="cta-section"><div class="container"><div class="cta-inner text-center"><p class="eyebrow justify-content-center"><span></span> Ready when you are</p><h2>A better way to connect with your city.</h2><p>Start with the service you need. No account is required to explore.</p><a class="btn btn-marigold btn-lg" href="services.php">Find a service <span aria-hidden="true">→</span></a></div></div></section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
