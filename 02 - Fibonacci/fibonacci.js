function fibonacci(n) {
    let value1 = 0
    let value2 = 1
    let value3

    for (let i = 0; i < n; i++) {
        console.log(`${value1}`)
        value3 = value2 + value1
        value1 = value2
        value2 = value3
    }
    
}

fibonacci(5)
fibonacci(10)
fibonacci(1)
    
