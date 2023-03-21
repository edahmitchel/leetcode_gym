

function pivotIndex(nums: number[]): number {
    // PSEUDOCODE
    // initialize left sum as 0, 

    // initialize totalArraySum = sum through the array 
    // start pointer at index 0
    // loop through the array
    // for each number
        // check left sum
        // if (totalArraySum - (left sum + current value )) is equal to left sum
            // return current idx
        // add current index value to left sum
    // return -1

    
    let leftSum: number = 0
    let totalArraySum: number = nums.reduce((prevCumm, curr) => prevCumm + curr, 0)
    for(let i = 0; i < nums.length; i++){
        const currVal: number = nums[i]
        if((totalArraySum - (leftSum + currVal)) === leftSum){
            return i
        }
        leftSum += currVal
    }
    return -1
}