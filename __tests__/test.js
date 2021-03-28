describe("Test output", () => {
    test("it should output an output", () => {
        expect(outputTest()).toEqual(true);
    });
});

function outputTest(){
    return true
}