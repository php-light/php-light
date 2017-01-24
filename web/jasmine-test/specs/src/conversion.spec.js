describe("La librairie de conversion", function() {
    describe("Conversion de livre à kilo", function() {

        it("Devrait diviser le nombre de livre par 2.2", function() {
            expect(Conversion.livreVersKilo(22)).toBe(10);
        });

        it("Devrait lancer une exception si l'entrée n'est pas numérique", function()  {
            expect(Conversion.livreVersKilo.bind("abc"))
                .toThrow("ValeurLivreIncorrecte");
        });

    });
});