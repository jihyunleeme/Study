# Proxy

## Proxy란 무엇인가?

ES6의 프록시, 특정 객체를 감싸 프로퍼티 읽기, 쓰기와 같은 객체에 가해지는 작업을 중간에 가로채는 객체.  
`Proxy` 자체에서 처리되기도 하고, 원래 객체가 처리하도록 그대로 전달.  
👉 객체의 변화를 감지하여 특정동작의 트랩을 설정할 때 사용.

데이터 검증에 사용하는 validator로 사용할수 있고,
데이터 변화를 감지하는 logger로 사용

- target: 프록시할 원본 객체
- handler: 가로채는 작업과 가로채는 작업을 정의하는 방법을 정의하는 객체

```js
const target = {
  message1: "hello",
  message2: "everyone",
};

const handler1 = {};

const proxy1 = new Proxy(target, handler1);

// 핸들러가 비어있기 때문에 기존 target처럼 행동합니다.
console.log(proxy1.message1); // hello
console.log(proxy1.message2); // everyone

const handler2 = {
  get(target, prop, receiver) {
    return "world";
  },
};

const proxy2 = new Proxy(target, handler2);

console.log(proxy2.message1); // world
console.log(proxy2.message2); // world
```

## get() 트랩

## set() 트랩

## reflect 클래스

일부 접근자에게 원래 동작을 제공, 다른 접근자 재정의

<br/><br/><br/><br/>

<hr/>

참고자료

🗝️ 메타프로그래밍,

[MDN](https://developer.mozilla.org/ko/docs/Web/JavaScript/Reference/Global_Objects/Proxy)

[ToastUI](https://ui.toast.com/weekly-pick/ko_20210413)
