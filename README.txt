Best Security - Clean Minimal Package
Files:
- index.html, services.html, portfolio.html, contact.html, contact.php
- css/styles.min.css (minified)
- js/main.min.js (minified)
- images/logo.svg and images/{topic}/*.svg (portfolio)
- robots.txt, sitemap.xml, README.txt

Notes before upload:
- Edit contact.php recipient ($to) to your real email if needed.
- PHP mail() must be enabled on the host; otherwise replace form action with a Formspree or similar endpoint.
- Fonts are loaded from Google Fonts to avoid bundling large font files (reduces zip size).
- All images are SVG placeholders; replace with real optimized JPG/WebP if desired (WebP reduces bandwidth).
- To reduce size further, remove unused pages or combine files; current package is purposely tiny.
