 <!-- whatsapp icon -->
        <div class="whatsapp-icon">
            <a href="https://wa.me/9203041462460" target="_blank" rel="noopener noreferrer" class="whatsapp-link">
              <div class="note" id="animatedNote">Chat Now</div>
              <div class="icon">
                <img src="https://cdn-icons-png.flaticon.com/128/4423/4423697.png" alt="WhatsApp" />
              </div>
            </a>
          </div>

<script>
// whatsapp icon 

        const messages = ["We Trade Quality." , "Any Query ?",  "Want Information?", "Call Now !"];
let currentIndex = 0;

const noteElement = document.getElementById("animatedNote");

setInterval(() => {
  currentIndex = (currentIndex + 1) % messages.length;
  noteElement.textContent = messages[currentIndex];
}, 3000);
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
    display: inline-block;
    width: 40px;
    height: 40px;
    margin-top: 10px;
  }
  
  .icon img {
    width: 100%;
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }
  
  /* Hover effect for icon */
  .whatsapp-link:hover img {
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
  }
  
  @media (max-width: 480px) {
    .whatsapp-icon {
        position: fixed;
        bottom: 26%;
        right: 30px;
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