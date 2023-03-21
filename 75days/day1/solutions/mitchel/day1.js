// solutions
// running sum

var runningSum = function (nums) {
  if (nums.length > 1 && nums.length < 100) {
    let sum = 0;
    resultArr = nums.map((item) => {
      sum = sum + item;
      return sum;
    });

    return resultArr;
  }
};

var pivotIndex = function (nums) {
  let totalSum = 0;

  for (let i = 0; i < nums.length; i++) {
    totalSum = nums[i] + totalSum;
  }
  let leftSum = 0;
  for (let i = 0; i < nums.length; i++) {
    if ((totalSum - nums[i]) / 2 === leftSum) {
      return i;
    }
    leftSum = nums[i] + leftSum;
  }
  return -1;
};
