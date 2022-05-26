<section id="contato" class="contact">
   <!-- header -->
   <header class="contact__header d-none">
      <h2>Contato</h2>
   </header>
   <!-- end of header -->

   <!-- row -->
   <div class="contact__row grid">
      <!-- map -->
       <div class="contact__row__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.0585080522737!2d-46.55515468438838!3d-23.673865571643063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce43a3c1d89a73%3A0xfb00e23435a2c57e!2sDURREX%20BRASIL!5e0!3m2!1spt-BR!2sbr!4v1652202573225!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>
      <!-- end of map -->

      <div class="contact__row__content bg-gray-300">
         <!-- header -->
          <header class="contact__row__content__header mb-4">
             <h3>Representante Oficial da DURREX</h3>
          </header> 
         <!-- end of header -->
         
         <ul class="d-flex f-column gp-1">
            <li>
               <a rel="nofollow noopener noreferrer" href="<?= CONTACT['addressLink']; ?>" class="link-neutral-500 d-flex ai-center" title="Venha conhecer a Durrex Brasil">
                  <i class="icon-marker mr-1"></i>
                  <?= CONTACT['address']; ?>
               </a>
            </li>
            
            <li>
               <a rel="nofollow noopener noreferrer" href="tel:<?= formatPhone(CONTACT['phone']['01']); ?>" class="link-neutral-500 d-flex ai-center" title="Vamos conversar por telefone?">
                  <i class="icon-phone mr-1"></i>
                  <?= CONTACT['phone']['01']; ?>
               </a>
            </li>
            
            <li>
               <a rel="nofollow noopener noreferrer" href="mailto:<?= formatPhone(CONTACT['mail']); ?>" class="link-neutral-500 d-flex ai-center" title="Vamos conversar por e-mail?">
                  <i class="icon-mail mr-1"></i>
                  <?= CONTACT['mail']; ?>
               </a>
            </li>
         </ul>
      </div>
      <!-- content -->
      <!-- end of content -->
   </div>
   <!-- end of row -->
</section>