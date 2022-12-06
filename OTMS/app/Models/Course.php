<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    private static $course, $image, $imageUrl, $imageName, $extention, $directory;

    private static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extention = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extention;
        self::$directory = 'teacher-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newCourse($request)
    {
        self::saveBasicInfo(new Course(), $request, self::getImageUrl($request));
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function updateCourse($request, $id)
    {
        self::$course = Course::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$course->image))
            {
                unlink(self::$course->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$course->image;
        }
        self::saveBasicInfo(self::$course, $request, self::$imageUrl);
    }

    public static function deleteCourse($id)
    {
       self::$course = Course::find($id);
        if (file_exists(self::$course->image))
        {
            unlink(self::$course->image);
        }
        self::$course->delete();
    }

    public static function saveBasicInfo($course, $request, $imageUrl)
    {  
        $course->title          = $request->title;
        $course->category_id    = $request->category_id;
        $course->objective      = $request->objective;
        $course->description    = $request->description;
        $course->starting_date  = $request->starting_date;
        $course->fee            = $request->fee;
        $course->image          = $imageUrl;
        $course->save();
    }

}
