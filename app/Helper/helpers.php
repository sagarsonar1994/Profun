<?php

function getPostImage($postId) {
  $getImage = \DB::table('post_images')->where('post_id', $postId)->select('image')->first();
  $imageName = $getImage->image;
  return $imageName;
}