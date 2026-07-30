 <!-- whatsapp icon -->
        <div class="whatsapp-icon">
            <a href="https://wa.me/923041462460" target="_blank" rel="noopener noreferrer" class="whatsapp-link">
              <div class="note" id="animatedNote">Chat Now</div>
              <div class="icon" aria-hidden="true">
                <svg viewBox="0 0 32 32" focusable="false">
                  <path d="M16 3.5c-6.9 0-12.5 5.4-12.5 12.1 0 2.3.7 4.5 1.9 6.4L3.5 28.5l6.8-1.8c1.8 1 3.8 1.5 5.8 1.5 6.9 0 12.5-5.4 12.5-12.1S22.9 3.5 16 3.5Zm0 22.6c-1.8 0-3.5-.5-5-1.4l-.4-.2-4 1.1 1.1-3.8-.3-.4c-1.1-1.7-1.7-3.7-1.7-5.8 0-5.5 4.6-10 10.3-10s10.3 4.5 10.3 10-4.6 10.5-10.3 10.5Zm5.7-7.5c-.3-.2-1.9-.9-2.2-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-.3-.2-1.3-.5-2.5-1.5-.9-.8-1.5-1.8-1.7-2.1-.2-.3 0-.5.1-.6.1-.1.3-.3.4-.5.1-.2.2-.3.3-.5.1-.2.1-.4 0-.5-.1-.2-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1.1-1.1 2.6s1.1 3 1.3 3.2c.2.2 2.2 3.4 5.4 4.7.8.3 1.4.5 1.8.6.8.2 1.5.2 2.1.1.6-.1 1.9-.8 2.2-1.5.3-.7.3-1.4.2-1.5 0-.2-.2-.3-.5-.4Z"/>
                </svg>
              </div>
            </a>
          </div>

<script>
// whatsapp icon 

window.addEventListener('load', function () {
  const messages = ["We Trade Quality." , "Any Query ?",  "Want Information?", "Call Now !"];
  let currentIndex = 0;

  const noteElement = document.getElementById("animatedNote");
  if (!noteElement) return;

  setInterval(() => {
    currentIndex = (currentIndex + 1) % messages.length;
    noteElement.textContent = messages[currentIndex];
  }, 3000);
});
</script>
          <style>
            .whatsapp-icon {
    position: fixed;
    bottom: 60px;
    right: 30px;
    text-align: center;
    z-index: 1000;
  }
  
  /* Link Styling */
  .whatsapp-link {
    text-decoration: none;
    display: inline-block;
    text-align: center;
  }
  
  /* Note Styling */
  .note {
    background: #25d366;
    color: white;
    font-size: 15px;
    font-weight: bold;
    padding: 15px 25px;
    text-align: center;
    position: relative;
    max-width: 220px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    border: none;
    transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
  }
  
  /* Adding subtle gradient to note */
  .note {
    background: linear-gradient(135deg, #25d366, #1eb956);
  }
  
  /* Adding arrow design to the note */
  .note::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 20px;
    background: #1eb956;
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
  }
  
  /* Hover effect for note */
  .whatsapp-link:hover .note {
    transform: scale(1.1);
    background: linear-gradient(135deg, #1eb956, #25d366);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
  }
  
  /* Icon Styling */
  .icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    margin-top: 10px;
    border-radius: 50%;
    background: #25d366;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .icon svg {
    width: 28px;
    height: 28px;
    fill: #fff;
  }
  
  /* Hover effect for icon */
  .whatsapp-link:hover .icon {
    transform: scale(1.15);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.3);
  }
  
  /* Responsive adjustments */
  @media (max-width: 768px) {
    .note {
      font-size: 13px;
      padding: 10px 20px;
      max-width: 180px;
    }
  
    .icon {
      width: 50px;
      height: 50px;
    }
    .whatsapp-icon {
      bottom: 18px;
      right: 18px;
    }
  }
  
  @media (max-width: 480px) {
    .whatsapp-icon {
        position: fixed;
        bottom: 18px;
        right: 18px;
        text-align: center;
        z-index: 1000;
      }
    .note {
      font-size: 12px;
      padding: 8px 15px;
      max-width: 150px;
    }
  
    .icon {
      width: 40px;
      height: 40px;

    }
  }
          </style>
