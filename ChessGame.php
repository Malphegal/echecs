<?php
    class ChessGame{

        // ---- CONST ----

        private const KING = "king.png";
        private const QUEEN = "queen.png";
        private const ROOK = "rook.png";
        private const BISHOP = "bishop.png";
        private const KNIGHT = "knight.png";
        private const PAWN = "pawn.png";
        
        // ---- METHODS ----
        
        public function drawChessBoard(){
            $playersPieces = [self::ROOK, self::KNIGHT, self::BISHOP, self::QUEEN, self::KING, self::BISHOP, self::KNIGHT, self::ROOK,
                              self::PAWN, self::PAWN,   self::PAWN,   self::PAWN,  self::PAWN, self::PAWN,   self::PAWN,   self::PAWN];

            $res = "";
            for ($i = 0; $i < 64; $i++)
                $res .= "<div class='" . (($i + ($i / 8)) % 2 == 0 ? "whitecell" : "blackcell") . "'>
                    <img src='" . ($i < 16 ? "img/black" . $playersPieces[$i] : ($i >= 48 ? "img/white" . $playersPieces[($i + 8) % 16] : "")) . "' />
                    </div>";
            return $res;
        }
    }
?>