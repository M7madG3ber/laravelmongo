<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Image;

trait ImageTrait
{
      public function generateImages($image, $path)
      {
            /**
             * Get extenstion
             */
            $ex   = $image->getClientOriginalExtension();

            /**
             * Make 3 copies from image
             */
            $image1 = $image;
            $image2 = $image;
            $image3 = $image;

            /**
             * Resize copies
             */
            $size1 = Image::make($image1)->resize(600, 600);
            $size2 = Image::make($image2)->resize(1200, 1200);
            $size3 = Image::make($image3)->resize(1920, 1920);

            /**
             * Save images
             */
            Storage::disk('public')->put("$path/image_1.$ex", (string) $size1->encode());
            Storage::disk('public')->put("$path/image_2.$ex", (string) $size2->encode());
            Storage::disk('public')->put("$path/image_3.$ex", (string) $size3->encode());

            return [
                  "$path/image_1.$ex",
                  "$path/image_2.$ex",
                  "$path/image_3.$ex",
            ];
      }
}