import api from "./api";
import { IProjeto } from "../@types/projeto";
import { AxiosResponse } from "axios";

interface IResponse {
  status: boolean;
  message: string;
  data: IProjeto[];
}

class ProjetoService {
  async fetchAll(): Promise<AxiosResponse<IResponse>> {
    return await api.get("/projetos");
  }
}

export default new ProjetoService();