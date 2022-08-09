## Mixin Pattern

재사용 가능한 기능 또 다른 객체나 class를 상속 없이 사용하기 위해 추가하는 객체이다.
우리는 mixin 그 자체를 사용할 수 없다. 유일한 목적은 상속 없이 `객체`나 `클래스`에 기능을 추가하기 위함.

여러 강아지를 만들어내는 어플리케이션으로 예를 들면, 우리가 만드는 basic 강아지는 `name` 속성을 제외하고 어떠한 property도 가지고 있지 않다.

```javascript
class Dog {
  constructor(name) {
    this.name = name;
  }
}
```

<br/><br/><br/><br/>

<hr/>

참고자료

- []()

https://www.patterns.dev/posts/mixin-pattern/
