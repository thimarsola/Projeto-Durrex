<section id="produtos" class="products py-10 bg-gray-300">
   <div class="container">

      <!-- header -->
      <header class="products__header d-flex ai-center f-column t-center">
         <h2 class="f-6">Nossos Produtos</h2>
         <div class="divider"></div>
         <p class="mt-5">Trabalhamos com bomba de lóbulo de rotor duplo, bomba homogênea e de emulsificação e bomba composta e homogênea</p>
      </header>
      <!-- end of header -->

      <!-- row -->
      <div class="products__row grid mt-8">

         <?php
         $file = file_get_contents(__DIR__ . '/includes/products.json');
         $list = json_decode($file, true);
         foreach ($list['products'] as $item):
            ?>

            <!-- card -->
            <article class="products__row__card bg-white-500 shadow d-flex gp-2 ai-center">
               <!-- image -->
               <div class="products__row__card__image">
                  <?= picture($item['image'], 'Conheça mais sobre a ' . $item['title']); ?>
               </div>
               <!-- end of image -->

               <!-- content -->
               <div class="products__row__card__content p-4">
                  <!-- header -->
                  <header class="products__row__card__content__header mb-3">
                     <h3 class="f-3"><?= $item['title']; ?></h3>
                  </header>
                  <!-- end of header -->

                  <!-- introduction -->
                  <div class="products__row__card__content__wrapper mb-2 t-justify">
                     <h4>Introdução:</h4>
                     <?php foreach ($item['introduction'] as $introduction): ?>
                        <p><?= $introduction; ?></p>
                     <?php endforeach; ?>
                  </div>
                  <!-- end of introduction -->

                  <?php if(!$item['advantage'] == null): ?>
                     <!-- advantage -->
                     <div class="products__row__card__content__wrapper mb-2 t-justify">
                        <h4>Vantagens:</h4>
                        <?php foreach ($item['advantage'] as $advantage): ?>
                           <p><?= $advantage; ?></p>
                        <?php endforeach; ?>
                     </div>
                     <!-- end of advantage -->
                  <?php endif; ?>

                  <?php if(!$item['rotor'] == null): ?>
                     <!-- rotor -->
                     <div class="products__row__card__content__wrapper mb-2 t-justify">
                        <h4>Rotor:</h4>
                        <?php foreach ($item['rotor'] as $rotor): ?>
                           <p><?= $rotor; ?></p>
                        <?php endforeach; ?>
                     </div>
                     <!-- end of rotor -->
                  <?php endif; ?>

                  <?php if(!$item['specifications'] == null): ?>
                     <!-- specifications -->
                     <div class="products__row__card__content__wrapper t-justify">
                        <h4>Especificações:</h4>
                        <?php foreach ($item['specifications'] as $specifications): ?>
                           <p><?= $specifications; ?></p>
                        <?php endforeach; ?>
                     </div>
                     <!-- end of specifications -->
                  <?php endif; ?>

                  <!-- buttons -->
                  <div class="products__row__card__content__buttons d-flex gp-2 mt-3">
                     <a href="<?= asset('files/' . $item['catalogue']); ?>" class="btn btn-primary-500">Catálogo</a>
                     <a rel="nofollow noopener noreferrer" href="<?= $item['video']; ?>" title="Veja esse vídeo" class="btn btn-primary-500">Vídeo</a>
                  </div>
                  <!-- end of buttons -->
               </div>
               <!-- end of content -->
            </article>
            <!-- end of card -->
         <?php endforeach; ?>

         <!-- card -->
         <article class="products__row__card bg-white-500 shadow p-4">
            <!-- header -->
            <header class="products__row__card__header mb-3">
               <h3 class="f-3">Áreas de Aplicação</h3>
            </header>
            <!-- end of header -->

            <!-- content -->
            <div class="products__row__card__content t-justify">
               <p>Produtos Químicos de Consumo: AES, LAS, AOS, K12, glicerol, sorbitol, álcool graxo, xampu de banho, creme para a pele, xampu, detergente líquido, sabonete de pasta de dente, pasta de sabão em pó, etc.</p>
               <p>Produtos Químicos Refinados: Corantes, pigmentos, todos os tipos de celulose, aditivos químicos, adesivos, óleo de silicone, óleo de couro, uma variedade de materiais coloidais, etc.</p>
               <p>Alimentos: Chocolate, leite concentrado, iogurte, mel, xarope, açúcar de cana, suco de tomate, suco concentrado, geléia, sorvete, leite, pasta de fermento, pasta de carne, geléia, condimento, borra, proteína de soja, pasta de farinha, etc.</p>
               <p>Fabricação de papel: Poliacrilamida, carbonato de cálcio, pasta de amido, pasta de amido carboxílico, colofónia, cola de colofónia, pasta de papel, enchimento, agente de resistência a seco, agente de resistência a húmido, agente de colagem, agente de filtro, agente antiespuma, espalhamento, produtos químicos para tratamento de água, tec.</p>
               <p>Fibra química: Pasta péctica, PVA, pasta de vinilon, pasta acrílica, pasta de amônia, fatia de poliéster, terileno, fibra de polipropileno, rayon, fibra funcional, etc.</p>
               <p>Produtos farmacêuticos: Pomadas, extractum, látex de medina, pasta de comprimidos, xarope, produtos de saúde, medicamentos, etc.</p>
               <p>Revestimento: Tinta, dope, tinta de impressão, tinta isolante, resina, aditivos e auxiliares, solvente orgânico, etc.</p>
            </div>
            <!-- end of content -->
         </article>
         <!-- end of card -->

      </div>
      <!-- end of row -->
   </div>
</section>