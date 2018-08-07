<?php

class Album extends Eloquent{

    protected $table = 'Album';
    protected $primaryKey = 'AlbumId';
    
    public function artist()
    {
        return $this->belongsTo('Artist', 'ArtistId', 'ArtistId');
    }

}
