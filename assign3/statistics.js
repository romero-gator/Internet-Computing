function getStats() {
    let nums = document.getElementById('numbers').value;
    nums = nums.split(',');

    for (let i = 0; i < nums.length; i++) {
        nums[i] = parseFloat(nums[i]);
    }
    
    document.getElementById('N').innerHTML = findN(nums);
    document.getElementById('Sum').innerHTML = findSum(nums).toFixed(2);
    document.getElementById('Mean').innerHTML = findMean(nums).toFixed(2);
    document.getElementById('Median').innerHTML = findMedian(nums).toFixed(2);
    document.getElementById('Mode').innerHTML = findMode(nums).toFixed(2);
    document.getElementById('Max').innerHTML = findMax(nums).toFixed(2);
    document.getElementById('Min').innerHTML = findMin(nums).toFixed(2);
    document.getElementById('Range').innerHTML = findRange(nums).toFixed(2);
    document.getElementById('Var').innerHTML = findVariance(nums).toFixed(2);
    document.getElementById('StdDev').innerHTML = findStandardDeviation(nums).toFixed(2);

    document.getElementById('stats').style.display = "grid";
}

function findN(nums) {
    return nums.length;
}

function findSum(nums) {
    let sum = 0;
    for (let i = 0; i < nums.length; i++) {
        sum += nums[i];
    }
    return sum;
}

function findMean(nums) {
    let sum = findSum(nums);
    return sum / nums.length;
}

function findMedian(nums) {
    nums.sort((a,b) => a-b);

    if (nums.length % 2 == 0) {
        return (nums[(nums.length/2)-1] + nums[nums.length/2]) / 2;
    } else {
        return nums[(nums.length-1)/2];
    }
}

function findMode(nums) {
    let occurences = {};
    let mode = 0, count = 0;

    for (let i = 0; i < nums.length; i++) {
        if (occurences[nums[i]]) {
            occurences[nums[i]]++;
        } else {
            occurences[nums[i]] = 1;
        }

        if (occurences[nums[i]] > count) {
            mode = nums[i];
            count = occurences[nums[i]];
        }
    }

    return mode;
}

function findMax(nums) {
    let max = nums[0];
    for (let i = 0; i < nums.length; i++) {
        if (nums[i] > max) {
            max = nums[i];
        }
    }
    return max;
}

function findMin(nums) {
    let min = nums[0];
    for (let i = 0; i < nums.length; i++) {
        if (nums[i] < min) {
            min = nums[i];
        }
    }
    return min;
}

function findRange(nums) {
    return findMax(nums) - findMin(nums);
}

function findVariance(nums) {
    let avg = findMean(nums);
    let sqDiffs = nums.map((num) => {
        return (num-avg) * (num-avg);
    });

    return findMean(sqDiffs);
}

function findStandardDeviation(nums) {
    return Math.sqrt(findVariance(nums));
}