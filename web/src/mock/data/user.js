import Mock from 'mockjs';
// 从数据库请求用户数据
const LoginUsers = [
  {
    id: 1,
    username: 'admin',
    password: '123456',
    avatar: 'https://raw.githubusercontent.com/taylorchen709/markdown-images/master/vueadmin/user.png',
    name: '张某某'
  }
];

const Users = [];
//这是模拟数据所以注释掉
for (let i = 0; i < 86; i++) {
  Users.push(Mock.mock({
    // id: Mock.Random.guid(),
    // name: Mock.Random.cname(),
    // addr: Mock.mock('@county(true)'),
    // 'age|18-60': 1,
    // birth: Mock.Random.date(),
    // sex: Mock.Random.integer(0, 1)
    id: Mock.Random.guid(),
    intro: Mock.Random.string(20,40),
    size:  Mock.Random.integer(60,100),
    type:  Mock.Random.integer(1,4),
    rate:  Mock.Random.integer(2,4),
    price: Mock.Random.integer(150,500),
    assort:Mock.Random.integer(4,8),//配套
    houserId:Mock.Random.guid(),
    img:'https://raw.githubusercontent.com/taylorchen709/markdown-images/master/vueadmin/user.png',
    addr: Mock.mock('@county(true)'),
    
    date: Mock.Random.date()
  }));
}

export { LoginUsers, Users };
