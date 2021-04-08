const sum = require('../Code/sum');
const test_function = require('../Code/changePosters')
test('adds 1 + 2 to equal 3', () => {
  expect(sum(1, 2)).toBe(3);
});
test('test function', () => {
    expect(test_function(5)).toBe(5);
  });