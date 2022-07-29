## the evolution of computing
- Dedicated
    - wholly uilized by a single customer.
    - guarantee of security, privacy and full utility of underlying resources.

- VMs
    - muliple Virtual Machines on one machine.
    - Hypervisor라고 불리는 소프트웨어 위에 vm이 구동됨
    - underuilized(활용도가 낮은) VM에 과지불하게됨.

- contianer
    - Virtual Machine running multiple container.
    - Docker Deamon이라는 소프트웨어 레이어가 여러 컨테이너를 운용함

- functions
    - A managed VMs running managed containers, known as Serverless compute
    - cold start*이 사이드 이펙트로 나타날수 있음 (cold start : 앞선 출력 결과를 이용해 동작하게 되므로, 데이터가 없는 시작 상태에서는 제대로 동작하지 않는 시스템.
    ) when you launch a function, serverless, or a serverless code, it generally it has to provision a server, becuase the cloud service provider doesn't want to be running servers, when they aren't being utilized. you might experience a cold start where you're waiting for a server to start befor your code will execute.
     