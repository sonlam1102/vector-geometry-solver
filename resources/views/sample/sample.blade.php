@extends('main')
@section('content')
    <div id="title-sol" style="text-align:center; border-radius: 10px 10px 0 0;">
        <h3>Một số bài toán mẫu</h3>
    </div>

    <div style="text-align:left; padding-left: 20px;" >
        <h2>Dạng : Rút gọn biểu thức </h2>
        <div style="text-align:left; padding-left: 30px;" >
            <p>Bài 1: Cho các điểm M, N, A, B, C, P, Q. Rút gọn biểu thức: Vecto[A,B]+Vecto[M,N]-Vecto[C,B]+Vecto[P,Q]+Vecto[C,A]+Vecto[N,M]</p>
            <p>Bài 2: Cho các điểm A, B, C, P, Q, M, N. Rút gọn biểu thưc: Vecto[A,B]+Vecto[M,N]-Vecto[C,B]+Vecto[P,Q]+Vecto[C,A]+Vecto[N,M] </p>
            <p>Bài 3: Cho các điểm A, B, C, D, E, G, F. Rút gọn biểu thức: 2*Vecto[A,B]+Vecto[C,D]+Vecto[E,E]+Vecto[G,A]-Vecto[B,B]-Vecto[E,D]-Vecto[G,F]</p>
        </div>
    </div>
    <hr>

    <div style="text-align:left; padding-left: 20px;" >
        <h2>Dạng: rút gọn biểu thức chứa tích vô hướng </h2>
        <div style="text-align:left; padding-left: 30px;" >
            <p>Bài 1: Cho tam giác ABC, điểm M. Rút gọn: Vecto[M,A]*Vecto[B,C] + Vecto[M,B]*Vecto[C,A] + Vecto[M,C]*Vecto[A,B]</p>
            <p>Bài 2: Cho hai điểm A, B, M, H. HM vuông góc AB, I là trung điểm AB. Rút gọn: Vecto[M,A]*Vecto[M,B]-Vecto[M,I]^2-Vecto[A,B]^2/4, Vecto[M,A]^2+Vecto[M,B]^2-2*Vecto[M,I]^2+Vecto[A,B]^2/2.</p>
            <p>Bài 3: Cho tam giác ABC . G là trọng tâm tam giác ABC. Rút gọn: Vecto[G,A]*Vecto[G,B]+Vecto[G,B]*Vecto[G,C]+Vecto[G,C]*Vecto[G,A]+1/2*(Vecto[G,A]^2+Vecto[G,B]^2+Vecto[G,C]^2)</p>
        </div>
    </div>
    <hr>

    <div style="text-align:left; padding-left: 20px;" >
        <h2>Chứng minh đẳng thức vector</h2>
        <div style="text-align:left; padding-left: 30px;" >
            <p>Bài 1: Cho hình bình hành ABCD.  O là tâm hình bình hành ABCD. Chứng minh: Vecto[A,B]+Vecto[B,D]=Vecto[B,C],Vecto[B,D]+Vecto[A,C]=Vecto[A,D]+Vecto[B,C].</p>
            <p>Bài 2: Cho tam giác ABC .  G là trọng tâm tam giác ABC. Chứng minh: Vecto[G,A]+Vecto[G,B]+Vecto[G,C]=Vecto[0]</p>
            <p>Bài 3: Cho hình bình hành ABCD . O là tâm hình bình hành ABCD. Chứng minh : Vecto[M,O]=1/4*(Vecto[M,A]+Vecto[M,B]+Vecto[M,C]+Vecto[M,D]).</p>
        </div>
    </div>
    <hr>

    <div style="text-align:left; padding-left: 20px;" >
        <h2>Chứng minh đẳng thức tích vô hướng</h2>
        <div style="text-align:left; padding-left: 30px;" >
            <p>Bài 1: Cho 4 điểm A, B, C, D. Chứng minh: Doan[A,B]^2-Doan[B,C]^2+Doan[C,D]^2-Doan[D,A]^2=2*Vecto[A,C]*Vecto[D,B]</p>
            <p>Bài 2: Cho tam giác ABC. với AD,BE,CF trung tuyến tam giác ABC. chứng minh: Vecto[B,C]*Vecto[A,D]+Vecto[C,A]*Vecto[B,E]+Vecto[A,B]*Vecto[C,F]=0</p>
            <p>Bài 3: Cho hai điểm A, B, M, H. HM vuông góc AB, I là trung điểm AB. Chứng minh: Vecto[M,A]*Vecto[M,B]=Doan[M,I]^2-Doan[A,B]^2/4, Doan[M,A]^2+Doan[M,B]^2=2*Doan[M,I]^2+Doan[A,B]^2/2.</p>
        </div>
    </div>
    <hr>

    <div style="text-align:left; padding-left: 20px;" >
        <h2>Biểu diễn một đối tượng bằng biểu thức giữa các đối tượng khác cho trước</h2>
        <div style="text-align:left; padding-left: 30px;" >
            <p>Bài 1: Cho hình bình hành ABCD . I là trung điểm đoạn DC. phan tich:  Vecto[B,I] theo Vecto[A,B] ,Vecto[A,D] </p>
            <p>Bài 2: : Cho tam giác ABC. AM là trung tuyến tam giác ABC.  phân tích: Vecto[A,M] theo Vecto[A,B] ,Vecto[A,C]</p>
            <p>Bài 3: Cho tam giác ABC. M là trung điểm AB, Vecto[A,N]=2*Vecto[N,C], Vecto[N,C]=1/2*Vecto[A,N], Vecto[A,N]=2/3*Vecto[A,C], K trung điểm MN. Phân tích: Vecto[A,K] theo Vecto[A,B] ,Vecto[A,C].</p>
        </div>
    </div>
    <hr>

@endsection