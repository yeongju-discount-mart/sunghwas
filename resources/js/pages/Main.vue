<template>
  <div id="main">
    <div class="bg-purple-dark shadow">
      <div class="container py-4 mx-auto text-white text-sm leading-tight">
        Sunghwas
        <div class="float-right">김건 님</div>
      </div>
    </div>
    <div class="flex container mx-auto mt-4">
      <div class="w-1/2 mt-32 text-center bg-white shadow pr-12">
        <img class="mt-16 rounded-full" src="https://via.placeholder.com/256" alt="정성화의 얼굴">
        <div class="my-16 text-lg">성화는 지금 <span class="text-pink-dark">행복</span>해요!</div>
        <div class="flex mb-8 items-center">
          <div class="w-1/4 text-lg">행복도</div>
          <div class="w-3/4 bg-grey-light mr-6">
            <div class="bg-red text-md leading-normal py-2 text-center text-white" style="width: 25%">25%</div>
          </div>
        </div>
        <div class="flex mb-8 items-center">
          <div class="w-1/4 text-lg">포만도</div>
          <div class="w-3/4 bg-grey-light mr-6">
            <div class="bg-orange-dark text-md leading-normal py-2 text-center text-white" style="width: 50%">50%</div>
          </div>
        </div>
      </div>
      <div class="w-1/2 mt-32 px-2 pl-12">
        <div class="flex flex-wrap -mx-2 bg-white shadow">
          <div class="w-full pl-3 text-lg mt-3 mb-3">할 일</div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">급식 먹기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">간식 먹기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">영화 보기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">데이트</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">코딩하기</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">축구</button>
          </div>
        </div>
        <div class="flex flex-wrap -mx-2 bg-white shadow my-12">
          <div class="w-full pl-3 text-lg mt-3 mb-3">대화하기</div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">안녕?</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">뭐 해?</button>
          </div>
          <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">심심해</button>
          </div>
          <!-- <div class="w-1/3 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">잘 지내?</button>
          </div> -->
          <div class="w-1/2 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">부먹이냐 찍먹이냐</button>
          </div>
          <div class="w-1/2 px-3 py-5">
            <button class="btn rounded px-4 py-1 w-full bg-white leading-normal border border-purple text-purple hover:bg-purple hover:text-white">짜장면이냐 짬뽕이냐</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss">
#main {
  overflow: hidden;
}
</style>
