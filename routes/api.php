<?php

use App\Http\Controllers\MusicaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('cadastro/musica', [MusicaController::class, 'cadastroMusica']);
Route::get('vizualizar/musica', [MusicaController::class, 'retornarTodasMusicas']);
Route::delete('delete/musica/{id}', [MusicaController::class, 'excluirMusica']);
Route::put('update/musica', [MusicaController::class, 'editarMusica']);
Route::get('pesquisar/musica/id', [MusicaController::class, 'pesquisarPorId']);
Route::get('pesquisar/musica/titulo', [MusicaController::class, 'pesquisarPorTitulo']);
