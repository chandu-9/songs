<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RecursiveIteratorIterator;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

class SongsController extends Controller
{

	protected $res = '';
	public function index(Request $request)
	{
        $search = $request->get('song');
        
		$songs = DB::table('songs')->where('song', 'like', "%$search%")
            ->orWhere('movie', 'like', "%$search%")
            ->paginate(15);
		 
		foreach ($songs as &$value) {
			$value->audio = 'http://music.co/'.$value->hero.'/'.$value->movie.'/'.$value->song;
		}
		
		return view('mp3.songs')->with('songs', $songs);
	}
	public function readSongs()
	{
		$location = '/home/chandu/Music/';
		
		$songsArr = $this->dirToArray($location);
		
		foreach ($songsArr as $hero => $movieArr) {
			foreach ($movieArr as $movie => $songArr) {
				foreach ($songArr as $song) {
					if (is_array($song)) {
						continue;
					}
				
					$songInfo = pathinfo($song);
					if ($songInfo['extension'] != 'mp3') {
						continue;
					}
					$val['lang'] = '';
					$val['path'] = '/var/www/html/mp3songs/';
					$val['heroine']= '';
					$val['movie']= $movie;
					$val['song']= $song;
					$val['hero']= $hero;
					$val['music_director']= '';
					$val['movie_director']= '';
					$val['singer']= '';
					$val['type']= '';
					$val['duration']=0;
					$val['release_date']= time();
					$val['created']= time();
					$val['modified']= time();
					$oldpath = '/home/chandu/Music/'.$hero.'/'.$movie.'/'.$song;
					$newpath = '/var/www/html/mp3songs/'.$hero.'/'.$movie.'/';
					
					if (!is_dir($newpath)) {
						mkdir($newpath,0777, true);
					}
					if (copy($oldpath, $newpath.$song)) {
						echo "copied".$song."<br>";
					}
					DB::table('songs')->insert($val);
				}
			}
		}
	}

	public function dirToArray($dir) { 
	   
	    $result = []; 

	    $cdir = scandir($dir);
	    $i = 0;
	    foreach ($cdir as $key => $value) { 
	    	$i++;
			if (!in_array($value, [".",".."])) { 
				if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) { 
					$result[$value] = $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
				} else { 
					
					/*$result[$i] = ['song'  => basename($value)];
					$result[$i] = ['movie' => basename($dir)];
					$result[$i] = ['path'  => dirname($dir)];
					$result[$i] = ['size'  => filesize($dir.'/'.$value)];*/

					$result[] = $value; 
				} 
			} 

	    } 
	    
	   return $result; 
	}
}