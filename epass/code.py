# cook your dish here
n=104729
primeNumbers=[]
sieve=[True for i in range(n+3)]
sieve[0]=sieve[1]=False
for i in range(2, n, 1):
    if sieve[i]:
        index=2
        num=index*i
        while num<n+3:
            sieve[num]=False
            index+=1
            num=index*i
for i in range(n):
    if sieve[i]:
        primeNumbers.append(i)
testcases=int(input())
for testcase in range(testcases):
    n=int(input())
    arr=[int(i) for i in input().split(' ')]
    solution=[0 for i in range(n)]
    count=0
    done={}
    for i in range(0,n):
        if arr[i] not in done:
            solution[i]=primeNumbers[count]
            count+=1
            done[arr[i]]=solution[i]
        else:
            solution[i]=done[arr[i]]
    print(''.join(str(i)+' ' for i in solution))