document.addEventListener("DOMContentLoaded", async () => {
  const isInPages = location.pathname.includes("/pages/");
  const base = isInPages ? ".." : ".";

  const [navbarHTML, footerHTML] = await Promise.all([
    fetch(`${base}/components/navbar.html`).then(r => r.text()),
    fetch(`${base}/components/footer.html`).then(r => r.text()),
  ]);

  document.getElementById("navbar").innerHTML = navbarHTML;
  document.getElementById("footer").innerHTML = footerHTML;
});
