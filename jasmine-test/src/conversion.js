var Conversion = {
    livreVersKilo: function(livres) {
        if(isNaN(livres - 1)) {
            throw "ValeurLivreIncorrecte";
        }
        return livres / 2.2;
    }
};
