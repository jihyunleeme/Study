### overview
- 전용 호스팅 서비스(dedicated hosting service) : 1 physical machine dedicated to single a business.
- virtual private server : 1 physical machine dedicated to a single business. visualized into sub-machines.
- shared hosting : 1 physical machine, shared by hundreed of business. very cheap, very limited
- cloud hosting : Multiple physical machines act as one system. muliple could services.

### Benefit of Cloud computing
pay for what you consume, no up-front cost(선행비용)

### Common cloud services
laaS
- compute
- storage
- networking
- databases

### Type of Cloud Computing
1. SaaS
- software as a Service
- For customers
    - ex) gmail, office 365

2. Paas 
- Platform as a Service
- For Depvelopers
- Focuse on the deployment and management of your apps.
- Don't worry about provisioning, configuring of understanding the hardware or OS.
    - ex) heroku, google app engine

3. laaS
- Infrastructure as a Service
- the basic building blocks for cloud IT.
- access to networing features, computers and data - storages space. Don't worry about IT stuff, data center and hardware.
    - ex) microsoft Azure, aws ...

## cloud computing responsibilities
- On-promise : all
- IaaS
- PaaS
- SaaS

## Azure's Deployment Models
- public cloud : Cloud-Native
- private cloud : On-Premise 
- Hybrid: On-Premise + Cloud service provider

## extra deployment model knowledge
- Cross-cloud : multiple Cloud provider (a.k.a multiple-cloud, hybrid-cloud)
    - ex) Amazon EKs (related to Knbernetes 실행 관리형 서비스) + Azure Arc (보안과 클라우드 네이티브 서비스를 하이브리드와 다중 클라우드 환경으로 통합) + GCP kubuernestes Engine

## Capital vs Operational Expenditure
- CAPEX : Capital Expenditure (spending money upfront, have to gues upfront)
- OPEX : Operational Expenditure (without investing in equipment)

## Cloud Architectrue Terminologies
- Availity :  High available (HA)
- Scalability
- Elasticity
- Fault Tolerance
- Disaster Recovery : High Durable (DR)

## High Availity
remain available, no single point of failure.
    - Azure Load Balancer 

## High Scalability
- increase you capacity
- Vertical Scaling : Scaling up (Upgrade to a bigger server)
- Horizonal Scaling : Scaling out (Add more servers of the same size)

## High Elasticity
automatically increse or decrease your capacity based on the current demand of traffic
- Scaling Out : add more servers of the same size
- Scailing In : Removing more servers of the same size
    - Azure VM Scale Sets
    - SQL Server Stretch Database

## High Durability
ability to reocer the loss, DR
