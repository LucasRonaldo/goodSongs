<?php

use App\Http\Controllers\MusicaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('cadastro/musica', [MusicaController::class, 'cadastroMusica']);
Route::post('vizualizar/musica', [MusicaController::class, 'retornarTodasMusicas']);
Route::post('delete/musica', [MusicaController::class, 'excluirMusica']);
Route::post('update/musica', [MusicaController::class, 'editarMusica']);
Route::post('pesquisar/musica/id', [MusicaController::class, 'pesquisarPorId']);
Route::post('pesquisar/musica/titulo', [MusicaController::class, 'pesquisarPorTitulo']);
