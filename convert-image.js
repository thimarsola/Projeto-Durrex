import imagemin from 'imagemin';
import imageminWebp from 'imagemin-webp';

(async () => {
   await imagemin(['./views/assets/images/*.{jpg,png}'], {
      destination: './public/images',
      plugins: [
         imageminWebp({quality: 75})
      ]
   });

   console.log('Images optimized');
})();