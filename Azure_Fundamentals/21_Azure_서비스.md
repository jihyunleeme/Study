# Microsoft Azure 기본 사항: 핵심 Azure 서비스에 관해 설명하기

https://docs.microsoft.com/ko-kr/learn/paths/az-900-describe-core-azure-services/

## 격리, 구분

가상네트워크 공용, 개인 IP주소 공간 정의
서브넷, DNS 가상 네트워크 구성

## 인터넷 통신

VM을 Azure CLI, 원격 데트스탑 프로토콜, Secure shell등을 이용해 연결

## Azure 리소스 간 통신

- 가상 네트워크
- 서비스 엔드포인트

## 온-프레미스 리소스와 통신
온프레미스 및 Azure 구독 내 리소스 연결.
- 지점 및 사이트 간 가상 사설망 : 조직 외부 컴퓨터 - 회사 네트워크
- 사이트간 VPN(가상 사설망) : 온프레미스 vpn 디바이스, 게이크위이를 가상 네트워크 azure vpn 게이트웨이로 연결.
- Azure ExpressRoute : 큰 대역폭, 높은 수준의 보안 필요 환경에서

## 네트워크 트래픽 라우팅
- 경로 테이블 : 트래픽이 전달되어야하는 방법의 규칙 정의. 서브넷 간의 패킷이 라우팅되는 법
- border Gateway protocol (BCP) : 온프레미스 BGP 경로를 azure 가상네트워크로 전파

## 네트워크 트래픽 필터링
- 네트워크 보안 그룹
- 네트워크 가상 어플리언스

## 가상 네트워크 연결
가상 피어링 사용  
UDR (사용자 정의 경로)로 네트워크 관리자 VNet 내 서브넷 간 라우팅 테이블,VNet 간의 라우팅 테이블 제어.

## Azure Virtual Network 설정
- 주소공간 : 구독, 연결된 모든 다른 네트워크 안에서 고유할 것. 가상 네트워크 만들고 주소 공간 추가 가능
- 서브넷 : 가상 네트워크 주소 범위 내  
서브간 라우팅, 기본 트래픽 경로에 따라
- 서비스 엔드 포인트 : Azure Cosmos DB, Azure Service Bus, Azure Key Vault 등
- NAT 게이트웨이 : 정적 아웃바운드 IP 주소 사용, 서브넷 구성
- Bastion Host
- DDos Protection 표준
- 방화벽 (Azure Firewall)

## VPN 게이트웨이
VPN 게이트웨이 : 가상 네트워크 게이트웨이

## ExpressRoute 연결모델
- CloudExchange 공동배치
- 지점 간 이더넷 연결
- 임의 연결
- ExpressRoute 사이트에서 직접

## ExpressRoute 이점
- 3계층 연결. 임의의(IPVPN) 네트워크, 지점간 이더넷 연결, 이더넷 Exchange로 가상간 연결
- MS클라우드 서비스에 엑세스 (지정학적 지역에 걸처)
- 프리미엄 추가기능으로 모든지역 MS 서비스에 글로벌 연결
- MS간 동적 라우팅
- 중복 연결, 높은 안정성. 피어링 위치
- 연결가동시간 SLA
- skype QoS지원
- 일관된 네트워크 처리량

## Azure storage
Azure Storage 사용을 위해 Azure Storage 계정을 만들어야함.  
Azure Potal, PowerShell, Azure CLI로 만들 수 있음.

스토리지 계정
- Blob, 파일, 디스크 ...

- Azure VM은 Azure Disk Storage 사용하여 가상디스크 저장. 하지만 Azure Disk Storage로 가상머신에 디스크 저장은 X.

계정 - container - blob

## Disk Storage
가상 하드 디스크에 데이터 영구적으로 저장 및 엑세스하기

- SSD, HDD ...


## Azure Blob Storage
클라우드 개체 스토리지 솔루션.  
비정형. 데이터 종류 제한 없음.  
데용량, 지속적 업로드 가능.  

Blob 장점
디스크 스토리지에 비교해
1. 개발자의 관리 필요 없음
2. Azure가 관리

적합한 경우
- 브라우저 이미지, 문서
- 분산용 파일저장
- 비디오, 오디오 스트리망
- 백업/ 복원, 재해 목구 및 보관용 데이터 저장
- 온프레미스/Azure호스팅 서비스 분석용 데이터 저장
 - 가상머신 최대 8TB

## Azure Files 기본 사항
완전 관리형 파일 공유 제공.  
- 여러 온프레미스 앱 파일공유로 마이그레이션
- 구성파일 파일공유. 동일한 버전 사용
- 데이터 나중에 처리, 분석. 진단로그, 크래시 덤프 등...


## 액세스 계층
- 핫 : 자주 엑세스 데이터. 웹사이트 이미지
- 쿨 : 자주 엑세스 X. 30일 이상 저장 데이터에 최적화 (고객 송장)
- 보관 : 거의 사용 X, 180 이상 보관. 장기백업에 적합

## Azure Cosmos DB
다중 모델 데이터베이스 서비스
처리량, 스토리지 탄력적.   
독립적 스케일링.  
빠른 엑세스
- cassandra
- gremline API
- Mongo DB
- SQL

## Azure SQL Database
데이터베이스 엔진 최신 안전화 버전 기반 - 관계형 디비 / PaaS

안정적, 고성능
인프라 관리 필요 X.

## Azure Database for MySQL
- 자동 백업
- 추가비용 없이 기본제공
- 미사용 데이터, 사용 중 데이터 보호
- 엔터프라이즈급 보안, 규정 준수
- 예측 가능 성능, 포괄적 종량제 가격 책정

## Azure Database for PostgreSQL
클라우드 관계형 디비 서비스
- 단일서버
- 하이퍼스케일 : 여러 머신 걸쳐 쿼리 수평으로 스케일링.  
높은 처리량 트랜젝션 워크로드 지원  

## Azure SQL Managed Instance

## 빅데이터 및 분석
- Azure Synapse Analytics : 서버리스 리소스, 대규모 프로비저닝 리소스를 데이터 쿼리함
- Azure HDInsight
완전 관리형 오픈 소스 분석 서비스

- Azure Databircks
데이터 통찰력, AI 솔루션 빌드

- Azure Data Lake Analytics
빅데이터 단순화 주문형 분석 작업 서비스