class Piece:
    def __init__(self, sort, color, position):
        self.sort = sort
        self.color = color
        self.position = position


class Board():
    def __init__(self):
        black_king = Piece("K", "black", (10, 10))
        white_king = Piece("K", "white", (-10, -10))
        self.position = {(10, 10) : black_king, (-10, -10): white_king}

    def add(self, piece):
        if self.isEmptyPosition(piece.position) and not self.isKingExists(piece):
            self.position[piece.position] = piece
        else:
            print("invalid query")

    def isEmptyPosition(self, place):
        positions = self.position.keys()
        if place in positions:
            return False
        return True
    
    def isKingExists(self , piece):
        if piece.sort == "K":
            for p in self.position.values():
                if p.sort == "K" and p.color == piece.color:
                    return True
        return False


    def remove(self, position):
        if self.position.get(position) != None:
            piece = self.position.get(position)
            if not self.isKingExists(piece):
                self.position.pop(position)
            else:
                print("invalid query")
        else:
            print("invalid query")
        

    def move(self, piece, position2):
        if piece.position in  self.position.keys():
            if self.isEmptyPosition(position2):
                self.remove(piece.position)
                piece.position = position2
                self.add(piece)
                print(self.position.get(piece.position))
            elif self.position.get(position2).color != self.position.get(piece.position).color and self.position.get(position2).sort == "P":
                self.remove(position2)
                self.remove(piece.position)
                piece.position = position2
                self.add(piece)
            else:
                print("invalid query")
        else:
            print("invalid query")

    def is_mate(self, color):
        kingPiece = 0
        for p in self.position.values():
            if p.sort == "K" and p.color == color:
                kingPiece = p
        
        if kingPiece != 0:
            kingPos = kingPiece.position
            kingPosX = kingPos[0]
            kingPosY = kingPos[1]
            mate_places = [
                (kingPosX - 1, kingPosY + 1), (kingPosX    , kingPosY + 1), (kingPosX + 1, kingPosY + 1),
                (kingPosX - 1, kingPosY    ), (kingPosX + 1, kingPosY    ),
                (kingPosX - 1, kingPosY - 1), (kingPosX    , kingPosY - 1), (kingPosX + 1, kingPosY - 1),
            ]

            for place in mate_places:
                if self.position.get(place) != None and self.position.get(place).color != kingPiece.color:
                    return True
        return False


# b = Board()
# piece = Piece("P", "white", (1, 1))
# b.add(piece)
# b.move(piece, (1,2))

# print(b.position.keys())
# print(b.is_mate)


