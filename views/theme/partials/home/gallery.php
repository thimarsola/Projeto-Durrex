<section id="galeria" class="gallery py-10">
   <div class="container">

      <!-- header -->
      <header class="gallery__header d-flex ai-center f-column t-center mb-8">
         <h2 class="f-6">Galeria</h2>
         <div class="divider"></div>
      </header>
      <!-- end of header -->
      
      <!-- row -->
      <div class="gallery__row grid">
         <?php for($i = 1; $i < 7; $i++): ?>
            <a href="<?= image('galeria-' . str_pad($i,2, 0, STR_PAD_LEFT) . '.jpg'); ?>" class="gallery__row__card">
               <?= picture('galeria-' . str_pad($i,2, 0, STR_PAD_LEFT), 'Conheça os nossos produtos', 'img-fluid'); ?>
            </a>
         <?php endfor; ?>
      </div>
      <!-- end of row -->
   </div>
</section>