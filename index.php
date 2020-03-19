<?php

    // ---- Initial requires

    require("ChessGame.php");

    // ---- ChessGame

    $chessGame = new ChessGame();
    $chessBoard = $chessGame->drawChessBoard();
    
    // ---- View
	
    require("chessView.php");