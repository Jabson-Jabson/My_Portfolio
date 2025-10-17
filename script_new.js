document.addEventListener("DOMContentLoaded", () => {
  // ==================== CONTACT FORM ====================
  const form = document.getElementById("contactForm");
  const status = document.getElementById("formStatus");
  const submitBtn = form.querySelector(".btn-submit");
  let hideTimer = null;

  function showStatus(msg, color = "limegreen") {
    if (hideTimer) clearTimeout(hideTimer);
    status.textContent = msg;
    status.style.color = color;
    status.style.opacity = "1";
    hideTimer = setTimeout(() => {
      status.style.opacity = "0";
      setTimeout(() => (status.textContent = ""), 500);
    }, 3000);
  }

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    const firstName = form.querySelector("#firstName").value.trim();
    const lastName = form.querySelector("#lastName").value.trim();
    const phone = form.querySelector("#phone").value.trim();
    const email = form.querySelector("#email").value.trim();
    const message = form.querySelector("#message").value.trim();

    const allFilled = [firstName, lastName, phone, email, message].every(v => v !== "");
    if (allFilled) {
      submitBtn.disabled = true;
      const originalText = submitBtn.textContent;
      submitBtn.textContent = "იგზავნება...";
      submitBtn.style.background = "linear-gradient(90deg, #ff9966, #ff5e62)";
      submitBtn.style.cursor = "wait";

      setTimeout(() => {
        showStatus("✅ შეტყობინება წარმატებით გაიგზავნა!");
        submitBtn.textContent = "გაიგზავნა ✅";
        submitBtn.style.background = "linear-gradient(90deg, #00c6ff, #0072ff)";
        form.reset();
        setTimeout(() => {
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
          submitBtn.style.cursor = "pointer";
        }, 2000);
      }, 1000);
    }
  });

  // ==================== LIGHTBOX ====================
  let lightbox = document.querySelector(".lightbox");

  if (!lightbox) {
    lightbox = document.createElement("div");
    lightbox.classList.add("lightbox");

    const closeBtn = document.createElement("span");
    closeBtn.classList.add("close-btn");
    closeBtn.innerHTML = "&times;";
    lightbox.appendChild(closeBtn);
    document.body.appendChild(lightbox);

    closeBtn.addEventListener("click", closeLightbox);
    lightbox.addEventListener("click", (e) => {
      if (e.target === lightbox) closeLightbox();
    });

    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeLightbox();
    });
  }

  function closeLightbox() {
    if (!lightbox.classList.contains("active")) return;
    lightbox.classList.add("fade-out");
    setTimeout(() => {
      lightbox.classList.remove("active", "fade-out");
      document.body.style.overflow = "";
      const img = lightbox.querySelector("img");
      if (img) img.remove();
    }, 300);
  }

  const images = document.querySelectorAll(".work-card img");

  images.forEach(img => {
    img.style.cursor = "zoom-in";
    img.addEventListener("click", () => {
      const oldImg = lightbox.querySelector("img");
      if (oldImg) oldImg.remove();

      const fullImg = document.createElement("img");
      fullImg.src = img.src;
      fullImg.alt = img.alt;

      let scale = 1, tx = 0, ty = 0, isPanning = false, startX = 0, startY = 0;

      fullImg.addEventListener("wheel", (e) => {
        e.preventDefault();
        scale += e.deltaY * -0.0015;
        scale = Math.min(Math.max(1, scale), 3);
        fullImg.style.transform = `scale(${scale}) translate(${tx}px, ${ty}px)`;
      });

      fullImg.addEventListener("mousedown", (e) => {
        if (scale <= 1) return;
        isPanning = true;
        startX = e.clientX - tx;
        startY = e.clientY - ty;
        fullImg.style.cursor = "grabbing";
      });

      window.addEventListener("mousemove", (e) => {
        if (!isPanning) return;
        tx = e.clientX - startX;
        ty = e.clientY - startY;
        fullImg.style.transform = `scale(${scale}) translate(${tx}px, ${ty}px)`;
      });

      window.addEventListener("mouseup", () => {
        isPanning = false;
        fullImg.style.cursor = scale > 1 ? "grab" : "zoom-in";
      });

      lightbox.insertBefore(fullImg, lightbox.firstChild);
      lightbox.classList.add("active");
      document.body.style.overflow = "hidden";
    });
  });
});



// ==================== HAMBURGER MENU ====================
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.querySelector(".menu-toggle");
  const navMenu = document.querySelector(".nav ul");

  menuToggle.addEventListener("click", () => {
    menuToggle.classList.toggle("active");
    navMenu.classList.toggle("show");
  });

  // დახუროს მენიუ როდესაც ბმულს დააკლიკებ
  document.querySelectorAll(".nav a").forEach(link => {
    link.addEventListener("click", () => {
      menuToggle.classList.remove("active");
      navMenu.classList.remove("show");
    });
  });
});



document.addEventListener("DOMContentLoaded", () => {

  // 🌌 3D Background Effect
  if (typeof VANTA !== "undefined" && VANTA.NET) {
    VANTA.NET({
      el: "#vanta-bg",
      mouseControls: true,
      touchControls: true,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x00c6ff,
      backgroundColor: 0x0a0a0a,
      points: 10.00,
      maxDistance: 25.00,
      spacing: 18.00
    });
  } else {
    console.warn("⚠️ VANTA library not loaded yet!");
  }

  // ✨ Typing Effect
  const roles = ["ჯაბა მაისურაძე", "ვებ დეველოპერი", "WordPress Learner", "Frontend Developer"];
  let i = 0;
  const typingSpan = document.querySelector(".typing");
  setInterval(() => {
    typingSpan.textContent = roles[i];
    i = (i + 1) % roles.length;
  }, 2000);
});
