
AZ-900
<h3>#1</h3>

1) PaaS   
- virtual machine과 operating system 그리고 IIS에 접근할 수 없음
+ ) IIS (Internet Information System) : MS사의 웹서버의 확장판이라고 생각하면 됨
- Azure Web Apps 서비스는 웹어플리케이션에 환경을 제공해줌. 
- platform을 자동적으로 scale하는 기능을 제공함 (autoscaling)
- web은 IIS를 running하는 가상머신에 호스팅된다.
- autoscaling은 웹앱을 호스팅하기위해 더 많은 로드발란서를 가상머신에 추가함
- developer를 위한 것
- develop과 클라우드 베이스 어플리케이션을 커스텀할 수있는 프레임워크
- pre-coded application 컴포넌트를 플랫폼을 으로 새로운 앱을 코딩할 시간을 줄여줌. such as workflow, directory services, security features, search 등등.
- 멀티플 플래폼 제공, 더욱 쉬운 개발. 컴퓨터, 모바일기기, 브라우저. cross-platform 앱을 더 쉽고 빠르게 개발하도록 한다.

2) laaS
- full control은 laaS

<h3>#2</h3>

자본지출, 운영지출  
같은 사이즈의 두개의 가상머신은 다른 configuration을 가지고 있을수 있으므로 비용은 다를 수 있다.  
가상머신이 멈추면 가상머신 비용은 지불하지 않지만 가상머신에 연결된 스토리지 비용은 여전히 지불해야한다. 가상머신과 연결된 다른 스토리지가 있는데 diagnositc data와 가상머신 백업니다.


<h3>#3</h3>
SaaS 솔루선을 실행할 때, SaaS 솔루션을 configuring할 책임이 있다. 그밖에 것은 클라우드 프로바이더가 매니징함.
SaaS는 최소한의 매니지먼트를 요구함.  
클라우드 프로바이더는 모든것을 관리할 책임이 있고, 앤드유저는 소프트웨어를 그냥 사용하기만 하면된다. SaaS는 인터넷을 통해서 클라우드베이스 앱을 연결하고 사용하도록 해준다. 흔한 예로 이메일, 캘린더, 오피스 365같은 오피스 툴이 있다.  
SaaS는 클라우드 제공자로부터 사용한 만큼 지불하는 방식으로 완벽한 소프트웨어 솔루션을 제공한다. 완벽한 소프트웨어 솔루션을 제공한다. 기관과 유저가 인터넷, 보통 웹 브라우저을 통해 너의 앱 사용을 빌려준다. (rent of the use an app)  
적절한 서비스 agreement를 가진 하드웨어와 소프트웨어를 관리하는 클라우드 프로바이더는 가용성과 너의 앰과 데이터의 보안을 보장한다.  

<h3>#4</h3>
예상보다 긴시간동안 데이터 센터가 오프라인이 되더라도 서버 일부가 가동되는 것을 보장하는 솔루션을 추천받고 싶다. 어떤걸 추천하겠는가?
Fault tolerance (장애 허용 시스템 / 결함 감내 시스템) : 시스템을 구성하는 부품의 일부에서 결함 또는 고장이 발생하여도 정상적 혹은 부분적으로 기능을 수행할 수 있는 시스템  


<h3>#5</h3>
퍼블릭 클라우드에 인프라를 host하는 조직은 더 이상 (their own) 데이터센터는 필요로하지 않는다.  
    
### #6
퍼블릭 클라우드의 두가지 특징
- metered pricing
- self-service management

pay-as-you-go pricing
responsible for development and configuration of 클라우드 소스 such as 가상머신, 웹사이트.

클라우드 소스를 호스팅하는 하드웨어는 클라우드 프로바이더에 의해 관리됨. 퍼블릭 클라우드에서는 다수의 고객들과 클라우드 소스를 사용하고 하드웨어를 공유. 물리적으로 같은 하드웨어에 호스팅된다.

connections to the public cloud ar secure.

Storage는 not limited(unlimited) 필요한만큼 큰 용량을 사용할 수 있음.

### #7
Azure App Service and Azure SQL database are PaaS.  
SQL server on VM is a laaS.

#### #8,9,10
PaaS Azure App service is a PaaS service.  
Azure virtual machine are an laaS service.  
Can't create a vm in PaaS.
Azure Storage is laaS.  
Azure Data Lake is PaaS.

#### #11
load balancer 부하 분산장치 - 트래픽, 서버 로드율 증가, 부하량, 속도저하를 고려하여 적절히 분산.

#### #12
a custom web app deployed to Azure. if it was a MS product, then it would be a SaaS.

#### #13


#### #
#### #
