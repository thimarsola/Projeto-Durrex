<!--header-->
<header class="header py-4 bg-gray-500 text-white-500">
   <div class="container">
      <!--navbar-->
      <div class="header__navbar d-flex ai-center jc-between">
         <!-- brand -->
         <div class="header__navbar__brand">
            <a href="#home" title="<?= site('name'); ?>">
               <?= picture('logo', site('name')); ?>
            </a>
         </div>
         <!-- end of brand -->


         <div class="header__navbar__section">
            <!-- toggle -->
            <div class="header__navbar__section__toggle">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <!-- end of toggle -->

            <!-- container -->
            <div class="header__navbar__section__container">
               <!-- nav -->
               <nav class="header__navbar__section__container__nav">
                  <h2 class="d-none">Menu de Navegação</h2>
                  
                  <ul class="menu d-flex ai-center gp-2">
                     <li><a href="#home" class="link-white-500">Home</a></li>
                     <li><a href="#quem-somos" class="link-white-500">Quem somos</a></li>
                     <li><a href="#produtos" class="link-white-500">Produtos</a></li>
                     <li><a href="#galeria" class="link-white-500">Galeria</a></li>
                     <li><a href="#contato" class="link-white-500">Contato</a></li>
                  </ul>
               </nav>
               <!-- end of nav -->
            </div>
            <!-- end of container -->

         </div>
      </div>
      <!--end of navbar-->
   </div>
</header><!--end of header-->